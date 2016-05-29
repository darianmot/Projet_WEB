<?php

include_once "bdd_connection.php";

Class ClientManager
{
    private $bdd;
    private $id;

    /*Constructeur, getters & setters*/
    public function __construct($bdd, $id)
    {
        $this->bdd = $bdd;
        $this->id = $id;
    }
    
    public function getBdd()
    {
        return $this->bdd;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    /*Obtention du solde*/
    public function getSolde()
    {
        $req = $this->getBdd()->query("SELECT solde FROM ClientWeb where id_utilisateur = '{$this->getId()}'");
        return $req->fetch(PDO::FETCH_ASSOC)['solde'];
    }

    /*Créditer le solde*/
    public function addSolde($montant)
    {
        $old_solde = $this->getSolde();
        $new_solde = $old_solde + $montant;
        $this->getBdd()->query("UPDATE ClientWeb SET solde = {$new_solde} WHERE id_utilisateur = '{$this->getId()}'");
    }
    
    /*Décréditer le solde*/
    public function removeSolde($montant)
    {
        $old_solde = $this->getSolde();
        $new_solde = $old_solde - $montant;
        $this->getBdd()->query("UPDATE ClientWeb SET solde = {$new_solde} WHERE id_utilisateur = '{$this->getId()}'");
    }
    
    
}

$connection = new Connection();
$bdd = $connection->getBdd();
$client = new ClientManager($bdd, 'toto');

if (isset($_POST['id_form'], $_POST['id']))
{
    $connection = new Connection();
    $bdd = $connection->getBdd();
    $client = new ClientManager($bdd, $_POST['id']);
    switch ($_POST['id_form'])
    {
        case 'getSolde':
            echo $client->getSolde();
            break;
        
        case 'addSolde':
            $client->addSolde($_POST['montant']);
            break;
    }
}

?>