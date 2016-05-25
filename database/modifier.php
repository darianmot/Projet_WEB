<?php
include "bdd_connection.php";
$connection = new Connection();
$bdd = $connection->getBdd();

$query = $bdd->query("UPDATE Utilisateur SET nom = '{$_POST['nom_field']}', prenom = '{$_POST['prenom_field']}', mail = '{$_POST['mail_field']}', password = '{$_POST['passwd_field']}' ");
$_SESSION['password']= $_POST['passwd_field'];
$_SESSION['nom'] = $_POST['nom_field'];
$_SESSION['prenom'] = $_POST['prenom_field'];
$_SESSION['mail'] = $_POST['mail_field'];
echo $_SESSION['prenom']


?>

