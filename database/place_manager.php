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

    /*Retourne une place libre selon le type et la zone selectionnée*/
    public function getFreePlace($id_zone, $type_vehicule)
    {
        $response = $this->getBdd()->query("SELECT MIN(Place.id_place) AS id_place FROM Stationnement
                    RIGHT JOIN Place ON Stationnement.id_place = Place.id_pLace
                    WHERE ((Stationnement.etat NOT IN ('occupee','reservee') or Stationnement.id_place IS NULL) 
                            AND Place.type_vehicule = '$type_vehicule' 
                            AND Place.id_zone = {$id_zone});");

        $place = $response->fetch_assoc();
        return $place['id_place'];
    }
    
    /*Renvoie un tableau contenant les informations associées à une place*/
    public function placeView($id_place)
    {
        $response = $this->getBdd()->query("SELECT * FROM ienac15_.Stationnement RIGHT JOIN ienac15_.Place
            ON Stationnement.id_place = Place.id_place WHERE Place.id_place='{$id_place}'");

        echo '<table>';
        while ($data = $response->fetch_assoc()) {
            /*Id de la place*/
            echo '<tr><td>ID Place : </td><td>' . $data['id_place'] . '</td>';

            /*Statue de la place*/
            echo '<tr><td>Status : </td><td>';
            if ($data['etat'] == NULL) {
                echo 'libre';
            } else {
                echo $data['etat'];
            }
            echo '</td></tr>';

            /*Véhicule eventuel sur la plaque*/
            echo '<tr><td>Vehicule :</td><td>' . $data['plaque'] . '</td></tr>';


        }
        echo '</table>';
    }
}



if (isset($_POST['id_form'])) {
    $connection = new Connection();
    $bdd = $connection -> getBdd();
    $placeManager = new PlaceManager($bdd);
    if ($_POST['id_form'] == 'newPlace') {
        if (isset($_POST['nombre']) and isset($_POST['id_zone'])) {
            for ($i = 1; $i <= $_POST['nombre']; $i++) {
                $placeManager->addPlace($_POST['id_zone'], $_POST['type']);
            }
        }
    }
    elseif ($_POST['id_form'] == 'place_view')
    {
       if (isset($_POST['id_place']))
       {
           $placeManager->placeView($_POST['id_place']);
       }
    }
        
}
?>


