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
        <label>Nom: </label><input name='nom_field' class='encart_reserv' value= $nom>
        <label>Prenom: </label><input name='prenom_field' class='encart_reserv' value=$prenom>
        <label>Mail: </label><input name='mail_field' class='encart_reserv' value=$mail>
        <label>Mot de passe: </label><input name='passwd_field' class='encart_reserv' value=$passwd type='password'>
    </form>
    ")
    ?>
    <button type="submit" class="button_reserv" id="modifier">Modifier mes données</button>
</div>

<div id="bloc_vehicule">
    <h1>Enregistrer un véhicule</h1>
    <form id="form_add_vehicule">
        <label>Type de véhicule</label><select class="select_reserv" name="type" size="1">
            <?php include "database/type_vehicule.php";
            $type_manager = new TypeManager();
            $type_manager->typeList()?>
        </select>

        <label>Plaque du véhicule</label><input name="plate_add_vehicule" class="encart_reserv">
        </br>
        <button type="submit" class="button_reserv" id="button_add_vehicule">Ajouter mon véhicule</button>

    </form>


</div>



<?php include("template/footer.php") ?>
</body>
</html>

