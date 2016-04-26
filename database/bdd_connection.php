<?php

class Connection
{
    private $bdd;

    /*Construteur*/
    public function __construct()
    {
        $this->setBdd(new mysqli('localhost', 'root', 'mysql', 'ienac15_'));
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