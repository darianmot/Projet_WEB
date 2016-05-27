<?php
include "bdd_connection.php";

// creation des variables de session
session_start();

$connection = new Connection();
$bdd = $connection->getBdd();
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); #emet des messages détaillés en cas d'erreur sql dans /var/log/apache2

$reponse = $bdd->query("SELECT id_utilisateur,password, nom, prenom, mail FROM Utilisateur WHERE id_utilisateur='{$_POST['identifiant']}'");
$donnees=$reponse->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['password'])AND isset($_POST['identifiant']))
{
    if (($donnees['password'])==$_POST['password'])
    {   
        $_SESSION['identifiant']=$_POST['identifiant'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['nom'] = $donnees['nom'];
        $_SESSION['prenom'] = $donnees['prenom'];
        $_SESSION['mail'] = $donnees['mail'];
        

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
