<?php
include "bdd_connection.php";

//démarrage de la session;
session_start();

//connexion a la base de donnes;
$connection = new Connection();
$bdd = $connection->getBdd();

//donnee brutes;
$reponse = $bdd->query("SELECT id_utilisateur,password  FROM Utilisateur WHERE id_utilisateur='{$_POST['identifiant']}'");

//premiere ligne;
$donnees=$reponse->fetch_assoc();

if (isset($_POST['password'])AND isset($_POST['identifiant'])) 
{
    if (($donnees['password'])==$_POST['password'])
    {$_SESSION['identifiant']=$_POST['identifiant'];
        $_SESSION['password']=$_POST['password'];
        echo(" <li id=offres> Bienvenue {$_SESSION['identifiant']}
                <ul id='menu2'>
                <li id = 'voiture'><span class='fa-stack fa-lg'>
                <i class='fa fa-user fa-stack-1x fa-inverse'></i>
                </span>Votre Compte
                <li><a href='deconnexion.php'>Deconnexion</a></li>
                </ul>
                </li>");
    }
    else
    {
        echo('echec');
    }
}
else
{
    echo('vide');
}
?>
