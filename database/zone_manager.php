<?php

include "place_manager.php";


class ZoneManager
{
    private $bdd;
    private $id_zone;

    /*Constructeur*/
    public function __construct($bdd, $id_zone)
    {
        $this->setBdd($bdd);
        $this->setIdZone($id_zone);
    }


    /*Getters*/
    public function getBdd()
    {
        return $this->bdd;
    }

    public function getIdZone()
    {
        return $this->id_zone;
    }


    /*Setters*/
    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }

    public function setIdZone($id_zone)
    {
        $this->id_zone = $id_zone;
    }
    

    /*** STATIONNEMENT ***/

    /*Ajoute ou met à jour un véhicule dans la base*/
    private function addVehicule($plaque, $type_vehicule)
    {
        /*On vérifie d'abord que le véhicule n'est pas déja garé*/
        $req = $this->getBdd()->query("SELECT id_place FROM Stationnement WHERE (plaque='{$plaque}' AND etat='occupee')");
        $current_stationnement = $req->fetch_assoc();
        if (isset($current_stationnement['id_place']))
        {
            throw new Exception('known_car');
        }
        $this->getBdd()->query("INSERT INTO Vehicule (`plaque`, `type_vehicule`)
        VALUES('{$plaque}', '{$type_vehicule}') ON DUPLICATE KEY UPDATE plaque = '{$plaque}' ");

    }

    /*Ajout d'un stationnement*/
    public function addStationnement($plaque, $type_vehicule)
    {
        $date = date("Y-m-d H:i:s");
        try {
            $reservation_place = $this->hasReservation($date, $plaque);
            $this->addVehicule($plaque, $type_vehicule);
            if ($reservation_place == null)
            {
                $placeManager = new PlaceManager($this->getBdd());
                $place = $placeManager->getFreePlace($this->getIdZone(), $type_vehicule);

            }
            else
            {
                $place = $reservation_place;
            }
            $this->getBdd()->query("INSERT INTO Stationnement(`id_stationnement`, `plaque`, `id_place`, `date_debut`, `date_fin`, `etat`, `id_facture`)
                    VALUES (NULL, '{$plaque}', '{$place}', '{$date}', NULL, 'occupee', NULL);");
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }


    /*Fin d'un stationnement*/
    public function endStationnement($id_stationnement)
    {
        /*On change l'état du stationnement*/
        $this->getBdd()->query("UPDATE Stationnement SET etat = 'fini' WHERE id_stationnement = {$id_stationnement}");

        /*On génère la facture*/
    }



    /*Création d'une reservation*/
    public function reservation($date_debut, $date_fin, $plaque, $type_vehicule)
    {
        $this->addVehicule($plaque, $type_vehicule);
        $placeManager = new PlaceManager($this->getBdd());
        $place = $placeManager->getFreePlace($this->getIdZone(), $type_vehicule);
        $this->getBdd()->query("INSERT INTO Stationnement(`id_stationnement`, `plaque`, `id_place`, `date_debut`, `date_fin`, `etat`, `id_facture`)
      VALUES (NULL, '{$plaque}', '{$place}', '{$date_debut}', '{$date_fin}', 'reservee', NULL);");
    }

    /*Renvoie la place liée à une réservation si le véhicule en a une, et null sinon*/
    public function hasReservation($date, $plaque)
    {
        $req = $this->getBdd()->query("SELECT id_place FROM Stationnement WHERE (('{$date}' BETWEEN date_debut AND date_fin )
            AND plaque = '{$plaque}' AND etat = 'reservee' )");
        $reponse = $req->fetch_assoc();
        if (isset($reponse['id_place']))
        {
            return $reponse['id_place'];
        }
        else{
            return null;
        }
    }


    /*** TARIFS ***/

    /*Renvoie le prix en fonction de l'heure associée à la zone*/
    public function getPrice()
    {
        $req = $this->getBdd()->query("SELECT Tarif.prix as prix
                                      FROM Tarif JOIN `Zone` ON Tarif.id_tarif = `Zone`.id_tarif 
                                      WHERE `Zone`.id_zone = {$this->getIdZone()}");
        $tarif = $req->fetch_assoc();
        return $tarif['prix'];
    }


    /*** VISU ***/
    public function tableView($lg_table)
    /*Crée un tableau représentant la table (void function)*/
    {
        $date = date("Y-m-d H:i:s");
        /*On récupère la liste des types de véhicules (=type de places)*/
        $response_type = $this->getBdd()->query("SELECT * FROM `TypeVehicule`");

        echo '<table class="visu_zone" cellspacing="30">';
        while ($type = mysqli_fetch_assoc($response_type)) {
            $i = 0; //Permet de controler la longueur de la ligne courante

            /*On crée les différentes tables de places (1 table/type de vehicule)*/
            echo '<tr><td>' . $type['type'] . '</td>
              <td><table class="visu_zone"><tr>';

            /*On récupère l'ensemble des places associées à la zone choisie et au type de place choisi*/
            $current_places = $this->getBdd()->query("SELECT * FROM `Place` WHERE Place.id_zone = '{$this->id_zone}' AND Place.type_vehicule = '{$type['type']}'");


            /*On crée une case dans le tableau pour chaque place*/
            while ($place = $current_places->fetch_assoc()) {

                /*On crée un nouvelle ligne si la ligne courante du tableau est trop longue*/
                if ($i % $lg_table == 0)
                {
                    echo '</tr><tr>';
                }

                /*On regarde si la place est occupee, reservée ou libre*/
                $place_status = $this->getBdd()->query("SELECT etat FROM `Stationnement` 
                                WHERE (etat IN ('occupee')  OR (etat = 'reservee' AND date_fin >= '{$date}'))AND id_place = '{$place['id_place']}' ORDER BY date_debut DESC;");
                $etat = $place_status->fetch_assoc();
                $class = 'place libre';
                switch ($etat['etat']) //On lui affecte alors la classe adaptée
                {
                    case 'occupee':
                        $class = "place occupee";
                        break;
                    case 'reservee':
                        $class = "place reservee";
                        break;
                }
            

                /*On crée alors effectivement la case 'td' d'id valant id_plaque*/
                echo " <a class='fancybox' rel='group' href='#place_info'><td id = {$place['id_place']}  class='{$class}'>{$place['id_place']}</td></a> ";

                $i++;

            }
            echo '</tr></table></tr>';
        }
        echo '</table>';
    }
}



/*
  POST instructions :
  On renvoie un résultat selon l'identifiant du formulaire posté
 */



if (isset($_POST['id_form'])) {
    try {$connection = new Connection();} 
    catch (Exception $e)
    {
        echo 'erreur connexion BDD';
    }
    $bdd = $connection -> getBdd();
    $zone = new ZoneManager($bdd, $_POST['id_zone']);
    switch ($_POST['id_form'])
    {
        case "newStationnement":
            if (isset($_POST['plaque']) and isset($_POST['type']))
            {
                try
                {
                    $zone->addStationnement($_POST['plaque'], $_POST['type']);
                }
                catch (Exception $e)
                {
                    if ($e->getMessage() == 'full') //Si la zone est pleine pour le type choisi
                    {
                        echo json_encode(array('error' => true,
                            'msg' => "<p style='width: 700px'>Impossible d'ajouter un véhicule <b>{$_POST['type']}</b> car il n'y a plus de places dans la zone <b>{$_POST['id_zone']}</b>.</p>" ));
                    }
                    elseif ($e -> getMessage() == 'known_car')
                    {
                        echo json_encode(array('error' => true,
                            'msg' => "<p style='width: 700px'>Le véhicule est déjà garé.</p>"));
                    }
                    else
                    {
                        echo 'Erreur : ', $e->getMessage();
                    }
                }
            }
            break;
        case "zoneView":
            if (isset($_POST['lg_table']))
            {
                $zone->tableView($_POST['lg_table']);
            }
            break;
        case "endStationnement":
            if (isset($_POST['id_stationnement']))
            {
                $zone->endStationnement($_POST['id_stationnement']);
            }
            break;
        case "newReservation":
            if (isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['plaque']) and isset($_POST['type_vehicule']))
            {
                $zone->reservation($_POST['date_debut'], $_POST['date_fin'], $_POST['plaque'], $_POST['type_vehicule']);
            }
            break;
        case 'getPrice':
            echo $zone->getPrice();
            break;
    }
}




?>