<?php
// demarrage de la session
session_start();
// creation des variables de session
//connexion à la table mysql ienac 15 attention il faut pour que ca marche que vos codes soient root et mysql
$bdd = new PDO('mysql:host=localhost;dbname=ienac15_;charset=utf8','root','mysql');
//donnee brutes
$reponse = $bdd->query("SELECT id_utilisateur,password  FROM Utilisateur WHERE id_utilisateur='{$_POST['identifiant']}'");

//premiere ligne
$donnees=$reponse->fetch();
//verification des donnees

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
{echo('vide');}
?>
