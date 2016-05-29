<?php

class Connection
{
    private $bdd;

    /*Construteur*/
    public function __construct()
    {
//        $this->setBdd(new mysqli('localhost', 'root', 'mysql', 'IENAC15_aeroport_C'));
        $this->setBdd(new PDO('mysql:host=localhost;dbname=IENAC15_aeroport_C', 'root', 'mysql'));
        $this->getBdd()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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