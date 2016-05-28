<?php
session_start();
include_once "bdd_connection.php";
$connection = new Connection();
$bdd = $connection->getBdd();
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query_vehicule=$bdd->query("SELECT plaque , type_vehicule FROM Vehicule WHERE id_clientweb = '{$_SESSION['identifiant']}' ");



$list_vehicule = $query_vehicule->fetchAll();
$_SESSION['user_vehicule'] = $list_vehicule

?>