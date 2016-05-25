<!DOCTYPE html>
<html>
<header>
<?php include("template/head.php") ?>
</header>
<body>
<?php include("template/menu.php")?>



<div id="bloc_compte">
    <?php session_start();
    include "database/bdd_connection.php";
    $connection = new Connection();
    $bdd = $connection->getBdd();
    $reponse = $bdd->query("SELECT id_utilisateur,password,nom,prenom,mail  FROM Utilisateur WHERE id_utilisateur='{$_SESSION['identifiant']}'");
    $donnees=$reponse->fetch_assoc();
    $donnees_envoyes = json_encode(array(
        "variable" => 1,
        "nom" => $donnees['nom'],
        "prenom"=>$donnees['prenom'],
        "mail"=>$donnees['mail'],
        "id_utilisateur"=>$donnees['id_utilisateur'],
    ));
    echo($donnees_envoyes);
    ?>

</div>
<?php include("template/footer.php") ?>
</body>
</html>

