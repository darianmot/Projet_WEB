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


}

if (isset($_POST['id_form'])) {
    $conection = new Connection();
    $bdd = $conection -> getBdd();
    $zone = new ZoneManager($bdd, $_POST['id_zone']);
    
    if ($_POST['id_form'] == 'newStationnement') 
    {
        if (isset($_POST['plaque']) and isset($_POST['type'])) 
        {
            $zone->addStationnement($_POST['plaque'], $_POST['type']);
        }
    } 
    elseif ($_POST['id_form'] == 'newPlace') 
    {
        if (isset($_POST['nombre'])) {
            for ($i = 1; $i <= $_POST['nombre']; $i++) 
            {
                $zone->addPlace($_POST['type']);
            }
        }
    }

}

?>