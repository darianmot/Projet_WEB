<?php
include "bdd_connection.php";

$connection = new Connection();
$bdd = $connection->getBdd();

$reponse=$bdd->query("SELECT id_utilisateur FROM Utilisateur WHERE id_utilisateur='{$_POST['pseudonyme']}'");
$donnees=$reponse->fetch(PDO::FETCH_ASSOC);
if (($donnees['id_utilisateur'])=='')
{
    echo("Votre inscrition a bien été prise en compte, vous pouvez dès à present vous connecter");

    $bdd->query("INSERT INTO Utilisateur(`id_utilisateur`,`password`,`nom`,`prenom`,`mail`) VALUES('{$_POST['pseudonyme']}','{$_POST['password']}','{$_POST['nom']}','{$_POST['prenom']}','{$_POST['mail']}')
    ");
    $bdd->query("INSERT INTO ClientWeb(`id_utilisateur`,`solde`) Values('{$_POST['pseudonyme']}',0)");
}
else
{
    echo("Identifiant déjà utilisé");
}
?>
