<?php

include "bdd_connection.php";

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

    /*Ajouts/suppresions/modfication d'une place*/
    public function addPlace($id_zone, $type_vehicule)
    {
        $this->getBdd()->query("INSERT INTO Place (`id_place`, `id_zone`, `type_vehicule`) 
        VALUES (NULL, {$id_zone}, '{$type_vehicule}');");
    }

    /*Retourne une place libre pour un véhicule donné selon le type et la zone selectionnée (et gère les eventuelles reservations)*/
    public function getFreePlace($id_zone, $type_vehicule)
    {
        $date = date("Y-m-d H:i:s");
        $response = $this->getBdd()->query("SELECT MIN(Place.id_place) AS id_place FROM 
            (SELECT * FROM (SELECT * FROM Stationnement ORDER BY date_debut DESC) AS _ GROUP BY id_place) AS DernierStationnement
             RIGHT JOIN Place ON DernierStationnement.id_place = Place.id_place
                    WHERE ((((DernierStationnement.etat='fini') OR (DernierStationnement.etat = 'reservee' AND DernierStationnement.date_fin <= '{$date}'))
                      OR DernierStationnement.id_place IS NULL)
                            AND Place.type_vehicule = '$type_vehicule' 
                            AND Place.id_zone = {$id_zone})");

        $place = $response->fetch_assoc();
        if (isset($place['id_place'])) {
            return $place['id_place'];
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
                                        AND (etat = 'occupee' OR (etat = 'reservee' AND date_fin >= '{$date}'))))                     
                OR Stationnement.id_place IS NULL)");
        
        while ($data = $response->fetch_assoc()) {
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
            if (isset($_POST['nombre']) and isset($_POST['id_zone'])) {
                for ($i = 1; $i <= $_POST['nombre']; $i++) {
                    $placeManager->addPlace($_POST['id_zone'], $_POST['type']);
                }
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


