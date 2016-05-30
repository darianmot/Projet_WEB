<?php

include_once "bdd_connection.php";
include_once "zone_manager.php";
class PlaceManager
{
    private $bdd;

    /*Constructeur, getter and setter*/
    public function __construct($bdd)
    {
        $this->setBdd($bdd);
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }

    /*Ajouts d'une place*/
    public function addPlace($id_zone, $type_vehicule)
    {
        $this->getBdd()->query("INSERT INTO Place (`id_place`, `id_zone`, `type_vehicule`) 
        VALUES (NULL, {$id_zone}, '{$type_vehicule}');");
    }

    /*Suppression d'une place : en réalité on la place dans une zone 0 virtuelle pour ne pas devoir supprimer des stationnements antérieurs*/
    public  function delPlace($id_place)
    {
        $this->getBdd()->query("UPDATE Place set id_zone = 0 WHERE id_place = {$id_place};");
    }

    /*Retourne une place libre (non occuppee ni reservee) pour un véhicule donné selon le type et la zone selectionnée*/
    public function getFreePlace($id_zone, $type_vehicule, $date)
    {
        $response = $this->getBdd()->query("SELECT MIN(Place.id_place) as freeplace
                                            FROM (SELECT * 
                                                  FROM Stationnement 
                                                  WHERE etat = 'occupee'
                                                        OR (etat='reservee') and '{$date}' <= date_fin)
                                            AS stationnement_occupee 
                                            RIGHT JOIN Place 
                                            ON stationnement_occupee.id_place = Place.id_place 
                                            WHERE (stationnement_occupee.id_place IS NULL
                                                  AND Place.type_vehicule = '{$type_vehicule}'
                                                  AND Place.id_zone = {$id_zone});");

        $place = $response->fetch(PDO::FETCH_ASSOC);
        if (isset($place['freeplace'])) {
            return $place['freeplace'];
        }
        else {
            throw new Exception('full');
        }
    }
    
    
    /*Renvoie un tableau contenant les informations associées à une place*/
    public function placeView($id_place)
    {
        $date = date("Y-m-d H:i:s");
        /*On récupère soit la réservation en cours, soit le dernier stationnement effectif (soit une place libre)*/
        $response = $this->getBdd()->query("SELECT * 
            FROM Stationnement RIGHT JOIN Place
            ON Stationnement.id_place = Place.id_place 
            WHERE Place.id_place='{$id_place}' 
                AND ((date_debut = (SELECT MAX(date_debut) 
                                  FROM Stationnement 
                                  WHERE id_place='{$id_place}' 
                                        AND (etat = 'occupee'
                                              OR (etat = 'reservee' AND date_fin >= '{$date}')
                                              OR etat = 'fini'))
                OR Stationnement.id_place IS NULL))");
        while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
            /*Numero de stationnement eventuel*/
            if ($data['etat']=='occupee') {
                echo '<h3 style="width: 500px; text-align: center">Stationnement <div id="id_stationnement">' . $data['id_stationnement'] . '</div></h3>';
            }
            echo '<table class = "info_box">';
            
            /*Id de la place*/
            echo '<tr><td>ID Place : </td><td>' . $data['id_place'] . '</td>';

            /*Statue de la place*/
            echo '<tr><td>Status : </td><td>';
            if ($data['etat'] == NULL or $data['etat'] == 'fini') {
                echo 'libre';

            } else {
                echo $data['etat'];

                /*Véhicule eventuel sur la plaque*/
                echo '<tr><td>Vehicule :</td><td>' . $data['plaque'] . '</td></tr>';

                /*Début du stationnement*/
                echo '<tr><td>Début :</td><td ><divid = "date_debut">' .$data['date_debut'] .'</div></td></tr>';

                /*Fin de stationnement si on a un reservation*/
                if ($data['etat']=='reservee')
                {
                    echo '<tr><td>Fin :</td><td ><divid = "date_fin">' .$data['date_fin'] .'</div></td></tr>';
                }

            }
            echo '</td></tr>';




        }
        echo '</table>';
    }
}



if (isset($_POST['id_form'])) {
    $connection = new Connection();
    $bdd = $connection->getBdd();
    $placeManager = new PlaceManager($bdd);
    switch ($_POST['id_form']) {
        case 'newPlace':
            if (isset($_POST['nombre']) and isset($_POST['id_zone']) and isset($_POST['type'])) {
                for ($i = 1; $i <= $_POST['nombre']; $i++) {
                    $placeManager->addPlace($_POST['id_zone'], $_POST['type']);
                }
            }
            break;
        case 'delPlace':
            if (isset($_POST['nombre']) and isset($_POST['id_zone']) and isset($_POST['type']))
            {
                $zone = new ZoneManager($bdd, $_POST['id_zone']);
                $freecapacity = $zone->effectiveCapacityByType($_POST['type']);
                $number_deleted = min($_POST['nombre'], $freecapacity);
                for($i = 1; $i<=$number_deleted; $i++)
                {
                    $date = date("Y-m-d H:i:s");
                    $placeManager->delPlace($placeManager->getFreePlace($_POST['id_zone'], $_POST['type'], $date));
                }
                echo $number_deleted;
                
            }
            break;
        case 'place_view':
            if (isset($_POST['id_place']))
            {
                $placeManager->placeView($_POST['id_place']);
            }
            break;
    }
}
?>


