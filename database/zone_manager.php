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
    

    /*Stationnements*/
    private function addVehicule($plaque, $type_vehicule)
    {
        $this->getBdd()->query("INSERT INTO Vehicule (`plaque`, `type_vehicule`)
        VALUES('{$plaque}', '{$type_vehicule}') ON DUPLICATE KEY UPDATE plaque = '{$plaque}' ");

    }

    public function addStationnement($plaque, $type_vehicule)
    {
        $date = date("Y-m-d H:i:s");
        $this->addVehicule($plaque, $type_vehicule);
        $placeManager = new PlaceManager($this->getBdd());
        $place = $placeManager->getFreePlace($this->id_zone, $type_vehicule);
        $this->getBdd()->query("INSERT INTO Stationnement(`id_stationnement`, `plaque`, `id_place`, `date_debut`, `date_fin`, `etat`, `id_facture`)
      VALUES (NULL, '{$plaque}', '{$place}', '{$date}', DATE_ADD('{$date}', INTERVAL 1 DAY), 'occupee', NULL);");
    }

    public function endStationnement($id_stationnement)
    {
        $this->getBdd()->query("Update Stationnement SET etat = 'fini' WHERE id_stationnement = {$id_stationnement}");
    }


    /*visu*/
    public function tableView($lg_table)
    {
        /*On récupère la liste des types de véhicules (=type de places)*/
        $response_type = $this->getBdd()->query("SELECT * FROM `ienac15_`.`TypeVehicule`");

        echo '<table cellspacing="30">';
        while ($type = mysqli_fetch_assoc($response_type)) {
            $i = 0; //Permet de controler la longueur de la ligne courante

            /*On crée les différentes tables de places (1 table/type de vehicule)*/
            echo '<tr><td>' . $type['type'] . '</td>
              <td><table><tr>';

            /*On récupère l'ensemble des places associées à la zone choisie et au type de place choisi*/
            $current_places = $this->getBdd()->query("SELECT * FROM `ienac15_`.`Place` WHERE Place.id_zone = '{$this->id_zone}' AND Place.type_vehicule = '{$type['type']}'");


            /*On crée une case dans le tableau pour chaque place*/
            while ($place = $current_places->fetch_assoc()) {

                /*On crée un nouvelle ligne si la ligne courante du tableau est trop longue*/
                if ($i % $lg_table == 0)
                {
                    echo '</tr><tr>';
                }

                /*On regarde si la place est occupee ou non*/
                $place_status = $this->getBdd()->query("SELECT EXISTS (
                                SELECT id_place FROM `ienac15_`.`Stationnement` 
                                WHERE etat IN ('occupee') AND id_place = {$place['id_place']})
                            AS status;");
                $status = $place_status->fetch_assoc();
                if ($status['status'] == 1) //On lui affecte alors la classe adaptée
                {
                    $class = "place occupee";
                } else {
                    $class = "place libre";
                }

                /*On crée alors effectivement la case 'td' d'id valant id_plaque*/
                echo " <td id = {$place['id_place']}  class='{$class}'><a class='fancybox' rel='group' href='#place_info'>{$place['id_place']}</a> </td>";
                $i++;
            }
            echo '</tr></table></tr>';
        }
        echo '</table>';
    }
}



/*
  POST instructions
 */


if (isset($_POST['id_form'])) {
    $connection = new Connection();
    $bdd = $connection -> getBdd();
    $zone = new ZoneManager($bdd, $_POST['id_zone']);
    switch ($_POST['id_form'])
    {
        case "newStationnement":
            if (isset($_POST['plaque']) and isset($_POST['type']))
            {
                $zone->addStationnement($_POST['plaque'], $_POST['type']);
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
    }
}




?>