<?php
include "bdd_connection.php";

$connection = new Connection();
$bdd = $connection->getBdd();

$reponse=$bdd->query("SELECT id_utilisateur FROM Utilisateur WHERE id_utilisateur='{$_POST['pseudonyme']}'");
$donnees=$reponse->fetch_assoc();

if (($donnees['id_utilisateur'])=='')
{
    echo("Votre inscrition a bien été prise en compte, vous pouvez des à present vous identifier dans longlet connexion!");
    $req=$bdd->query("INSERT INTO Utilisateur(`id_utilisateur`,`password`,`nom`,`prenom`,`mail`) 
    VALUES 
    ('{$_POST['pseudonyme']}','{$_POST['password']}','{$_POST['nom']}','{$_POST['prenom']}','{$_POST['mail']}')");
}
else
{
    echo("ce pseudonyme existe déjà, veuillez en taper un autre");
}
?>
