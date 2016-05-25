<?php

include "bdd_connection.php";

class TarifManager
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

    /* Obtenion du prix en fonction de l'heure*/
    public function getTarif($id_tarif)
    {
        $req = $this->getBdd()->query("SELECT prix FROM Tarif WHERE id_tarif = {$id_tarif}");
        $tarif = $req->fetch_assoc();
        return $tarif['prix'];
    }

    /* Modification du tarif*/
    public function setTarif($id_tarif, $new_price)
    {
       $this->getBdd()->query("UPDATE Tarif SET prix = '{$new_price}' WHERE id_tarif = {$id_tarif}");
    }

}




if (isset($_POST['id_form'])) {
    $connection = new Connection();
    $bdd = $connection->getBdd();
    $tarifManager = new TarifManager($bdd);
    switch ($_POST['id_form']) {
        case 'getTarif':
            if (isset($_POST['id_tarif'])) {
                echo $tarifManager->getTarif($_POST['id_tarif']);
            }
            break;
        case 'setTarif':
            if (isset($_POST['id_tarif']) and isset($_POST['prix'])) {
                $tarifManager->setTarif($_POST['id_tarif'], $_POST['prix']);
            }
    }
}

?>