<?php
include "bdd_connection.php";
session_start();
$connection = new Connection();
$bdd = $connection->getBdd();
$reponse=$bdd->query("SELECT id_utilisateur FROM Utilisateur WHERE id_utilisateur='{$_POST['pseudonyme']}'");
$donnees=$reponse->fetch_assoc();
echo ("{$donnees['id_utilisateur']}");

if (($_POST['pseudonyme'])==$_SESSION['identifiant'] )
{
    $bdd->query("UPDATE Utilisateur SET password='{$_POST['password']}',nom='{$_POST['nom']}' ,prenom='{$_POST['prenom']}',mail='{$_POST['mail']}' 
    WHERE id_utilisateur='{$_POST['pseudonyme']}' ");

    echo("Les modifications ont bien été prises en compte");

    $_SESSION['identifiant']=$_POST['pseudonyme'];

}
else
{
    if ($donnees['id_utilisateur']=="")
    {
        $bdd->query("UPDATE Utilisateur SET id_utilisateur='{$_POST['pseudonyme']}',password='{$_POST['password']}',nom='{$_POST['nom']}' ,prenom='{$_POST['prenom']}',mail='{$_POST['mail']}' 
        WHERE id_utilisateur='{$_SESSION['identifiant']}' ");
        echo("Les modifications ont bien été prises en compte");
        $_SESSION['identifiant']=$_POST['pseudonyme'];
    }
    else
    {
        echo('Identifiant déjà utilisé');
    };
}
?>
