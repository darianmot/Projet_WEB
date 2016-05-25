<?php
include "bdd_connection.php";

// creation des variables de session
session_start();

$connection = new Connection();
$bdd = $connection->getBdd();

$reponse = $bdd->query("SELECT id_utilisateur,password FROM Utilisateur WHERE id_utilisateur='{$_POST['identifiant']}'");
$donnees=$reponse->fetch_assoc();

if (isset($_POST['password'])AND isset($_POST['identifiant']))
{
    if (($donnees['password'])==$_POST['password'])
    {   
        $_SESSION['identifiant']=$_POST['identifiant'];
        $_SESSION['password']=$_POST['password'];

        if ($_SESSION['identifiant']== 'admin')
        {
            echo ('admin');
        }
        else
        {
            echo('utilisateur_lambda');
        }
    }
    else
    {
        echo('echec');
    }
}
else
{
echo ('echec');
}
?>
