<?php
include 'bdd_connection.php';
$connection = new Connection();
$bdd = $connection->getBdd();
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query= $bdd->query("DELETE FROM Vehicule WHERE plaque='{$_POST['plaque_delete']}'")
?>