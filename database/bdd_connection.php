<?php

class Connection
{
    private $bdd;

    /*Construteur*/
    public function __construct()
    {
        $this->setBdd(new mysqli('localhost', 'root', 'mysql', 'IENAC15_aeroport_C'));
    }

    /*Getter*/
    public function getBdd()
    {
        return $this->bdd;
    }

    /*Setter*/
    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }
    
}
?>