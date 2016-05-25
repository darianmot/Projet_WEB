<!DOCTYPE html>
<html>
<header>
<?php include("template/head.php") ?>
</header>
<body>
<?php include("template/menu.php")?>

<div id="bloc_compte">
    <h1>Modifier mes données personnelles</h1>
    <?php session_start();
    include "database/bdd_connection.php";
    $connection = new Connection();
    
    $bdd = $connection->getBdd();
    $reponse = $bdd->query("SELECT id_utilisateur,password,nom,prenom,mail  FROM Utilisateur WHERE id_utilisateur='{$_SESSION['identifiant']}'");
    $donnees=$reponse->fetch(PDO::FETCH_ASSOC);
    $nom = $donnees['nom'];
    $prenom = $donnees['prenom'];
    $mail = $donnees['mail'];
    $id_utilisateur= $donnees['id_utilisateur'];
    $passwd = $_SESSION['password'];
    echo("
    
    <form id='personal_data'>
        <label>Nom: </label><input name='nom_field' value= $nom>
        <label>Prenom: </label><input name='prenom_field' value=$prenom>
        <label>Mail: </label><input name='mail_field' value=$mail>
        <label>Mot de passe: </label><input name='passwd_field' value=$passwd type='password'>
    </form>
    ")
    ?>
    <button type="submit" class="button_reserv" id="modifier">Modifier mes données</button>
</div>



<?php include("template/footer.php") ?>
</body>
</html>

