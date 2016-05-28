<?php
session_start();
include "bdd_connection.php";
$connection = new Connection();
$bdd = $connection->getBdd();
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query1 = $bdd->query("INSERT IGNORE INTO ClientWeb VALUES('{$_SESSION['identifiant']}','0')");
$query2 = $bdd->query("INSERT IGNORE INTO Vehicule(`plaque`,`type_vehicule`,`id_clientweb`) VALUES ( '{$_POST['plate_add_vehicule']}' ,'{$_POST['type_add_vehicule']}' , '{$_SESSION['identifiant']}' )");
?>