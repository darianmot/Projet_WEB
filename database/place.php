<?php

class Place
{
    private $id_place;
    private $type_vehicule;

    //Constructeur
    public function __construct($id_place, $type_vehicule)
    {
        $this->id_place = $id_place;
        $this->type_vehicule = $type_vehicule;
    }


    //Getters
    public function getIdPlace()
    {
        return $this->id_place;
    }

    public function getTypeVehicule()
    {
        return $this->type_vehicule;
    }


    //Setters
    public function setIdPlace($id_place)
    {
        $this->id_place = $id_place;
    }

    public function setTypeVehicule($type_vehicule)
    {
        $this->type_vehicule = $type_vehicule;
    }
}