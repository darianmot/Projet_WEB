<?php
session_start();
if (isset($_POST['plate_add_vehicule'], $_POST['type_add_vehicule'], $_SESSION['identifiant'])) {
    include_once "bdd_connection.php";
    $connection = new Connection();
    $bdd = $connection->getBdd();
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*On regarde si le véhicule est connu*/
    $plaque = $_POST['plate_add_vehicule'];
    $type_vehicule = $_POST['type_add_vehicule'];
    $req = $bdd->query("SELECT plaque FROM Vehicule WHERE plaque = '{$plaque}'");
    if (!isset($req->fetch(PDO::FETCH_ASSOC)['plaque'])) {

        /*On insère/MAJ la bdd*/
        $bdd->query("INSERT INTO Vehicule (`plaque`, `type_vehicule`, `id_clientweb`)
        VALUES('{$plaque}', '{$type_vehicule}','{$_SESSION['identifiant']}')");
    }
    else {
        /*On met à jour les infos de la plaque choisie (on compte sur la bienfaisance des utililsateurs pour ne pas ajouter les vehicules de qqlun d'autre)*/
        $bdd->query("REPLACE INTO 
                      Vehicule(`plaque`,`type_vehicule`,`id_clientweb`) 
                      VALUES ( '{$_POST['plate_add_vehicule']}' ,'{$_POST['type_add_vehicule']}' , '{$_SESSION['identifiant']}')
                      ");
    }
}
?>