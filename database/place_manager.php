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
}
?>


