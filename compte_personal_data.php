<!DOCTYPE html>
<html>
<header>
<?php include("template/head.php") ?>
</header>
<body>
<?php include("template/menu.php")?>



<div id="bloc_compte">
    <?php
    include "database/bdd_connection.php";
    $connection = new Connection();
    $bdd = $connection->getBdd();
    $reponse = $bdd->query("SELECT id_utilisateur,password,nom,prenom,mail  FROM Utilisateur WHERE id_utilisateur='{$_SESSION['identifiant']}'");
    $donnees=$reponse->fetch_assoc();
    echo("      <table>
                    <form  method=\"post\" id=\"modifier_form\">
                    <tr><td><b>Identifiant</b></td><td><input type=\"text\" name=\"pseudonyme\" id=\"pseudonyme\" value='{$donnees['id_utilisateur']}'></td></tr>
                    <tr><td><b>Password</b></td><td><input type=\"password\" name=\"password\" id=\"password\" value='{$donnees['password']}' required></td></tr>
                    <tr><td><b>nom</b></td><td><input type=\"text\" name=\"nom\" id=\"nom_compte\" value='{$donnees['nom']}' ></td></tr>
                    <tr><td><b>prenom</b></td><td><input type=\"text\" name=\"prenom\" id=\"prenom_compte\" value='{$donnees['prenom']}' ></td></tr>
                    <tr><td><b>mail</b></td><td><input type=\"text\" name=\"mail\" id=\"mail_compte\" value='{$donnees['mail']}'></td></tr>
                    </form>
                </table>
                <button type = \"button\"  id=\"modifier\" > Modifier </button>
                <button type='button' id='annuler' ><a href='index.php' >annuler</a></button>
")

    ?>

</div>
<?php include("template/footer.php") ?>
</body>
</html>

