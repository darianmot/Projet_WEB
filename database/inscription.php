<?php
include "bdd_connection.php";
$connection = new Connection();
$bdd = $connection->getBdd();
$reponse=$bdd->query("SELECT COUNT(*) AS nb FROM Utilisateur");
$reponse->fetch_assoc();
//$nb_utilisateur=$reponse['nb'];
//$bdd->exec("INSERT INTO  Utilisateur  VALUES ($nbr_utilisateur+1,{$_POST['password_inscription']},{$_POST["nom_inscription"]},{$_POST['prenom_inscription']},{$_POST['mail_inscription']})");
?>
