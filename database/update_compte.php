<?php
include "bdd_connection.php";
$connection = new Connection();
$bdd = $connection->getBdd();


if (($_POST['pseudonyme'])!='')
{
    //echo("Votre inscrition a bien été prise en compte, vous pouvez dès à present vous connecter");
    //$req=$bdd->query(" UPDATE Utilisateur(`id_utilisateur`,`password`,`nom`,`prenom`,`mail`) 
    //SET ({$_POST['pseudonyme']}','{$_POST['password']}','{$_POST['nom']}','{$_POST['prenom']}','{$_POST['mail']}' 
    //WHERE  id_utilisateur='{$_SESSION['identifiant']}'");
    //$_SESSION['identifiant']=$_POST['pseudonyme'];
}
else
{
    echo('Identifiant est déjà utilisé');
}
?>
