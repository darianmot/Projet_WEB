<?php

include("place.php");

class Zone
{
    //Attributs
    private $id_zone;
    private $tarif;
    private $places;


    //Constructeurs
    public function __construct($id_zone, $tarif)
    {
        $this->setIdZone($id_zone);
        $this->setTarif($tarif);
    }


    //Getters
    public function getIdZone()
    {
        return $this->id_zone;
    }

    public function getTarif()
    {
        return $this->tarif;
    }

    //Setters
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }

    public function setIdZone($id_zone)
    {
        $this->id_zone = $id_zone;
    }


    //Gestion des places
    public function addPlace($type_vehicule, $bdd)
    {
        $bdd->query("INSERT INTO Place (`id_place`, `id_zone`, `type_vehicule`) 
        VALUES (NULL, {$this->id_zone}, '{$type_vehicule}')");

    }

}

$bdd = new mysqli('localhost', 'root', 'mysql', 'ienac15_');
$place1 = new Place(1, 'handicape');
$place2 = new Place(2, 'ejfn');
$zone1 = new Zone(1, 45);
$zone1->addPlace('handicape', $bdd);