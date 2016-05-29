<?php
session_start();
include_once "bdd_connection.php";
$connection = new Connection();
$bdd = $connection->getBdd();
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $bdd->query("REPLACE INTO 
                      Vehicule(`plaque`,`type_vehicule`,`id_clientweb`) 
                      VALUES ( '{$_POST['plate_add_vehicule']}' ,'{$_POST['type_add_vehicule']}' , '{$_SESSION['identifiant']}')
                      ");
?>