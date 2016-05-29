<?php
include 'bdd_connection.php';
session_start();
$connection = new Connection();
$bdd = $connection->getBdd();
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id_deletion = "{$_SESSION['identifiant']}".'*';

$query= $bdd->query("SET foreign_key_checks=0;
                     UPDATE Vehicule SET id_clientweb = '{$id_deletion}' WHERE plaque='{$_POST['plaque_delete']}' ;
                     SET foreign_key_checks=1;
                     ")
?>