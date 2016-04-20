<?php
// demarrage de la session
session_start();
// creation des variables de session
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page de connexion</title>
</head>
<body>
<?php
//connexion à la table mysql ienac 15 attention il faut pour que ca marche que vos codes soient root et mysql
$bdd = new PDO('mysql:host=localhost;dbname=ienac15_;charset=utf8','root','mysql');
//donnee brutes
$reponse = $bdd->query("SELECT identifiant,password  FROM test WHERE identifiant='{$_POST['identifiant']}'");
//premiere ligne
$donnees=$reponse->fetch();
//verification des donnees
if (isset($_POST['password'])AND isset($_POST['identifiant']))
    {if (($donnees['password'])==$_POST['password'])
    {$_SESSION['identifiant']=$_POST['identifiant'];
        $_SESSION['password']=$_POST['password'];
        header('location:http://localhost/Projet_WEB/index.php');}

else
{
    header('location:http://localhost/Projet_WEB/connexion.php');
    
}}
else
{}
?>
</body>
</html>
