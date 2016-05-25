<?php
include "bdd_connection.php";

class TypeManager
{
    private $bdd;

    public function __construct()
    {
        $connection = new Connection();
        $this->setBdd($connection->getBdd());
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }

    /*Renvoie la liste des types enregistrés sous forme de liste déroulante*/
    public function typeList()
    {
        $req = $this->getBdd()->query("SELECT * FROM TypeVehicule");
        echo '<select name="type" id="type">';
        while($donnees = $req->fetch(PDO::FETCH_ASSOC))
        {
            echo '<option>'.$donnees['type'].'</option>';
        }
        echo '</select>';
    }
}

?>