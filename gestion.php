<!DOCTYPE html>
<!--salut c'est moi hehe-->

<?php include("template/head.php"); ?>

<body>

<?php include("template/header.php"); ?>

<?php include("template/menu.php"); ?>

<!-- Le corps -->
<h2>Ajouter des emplacements</h2>
<form method="POST" action="database/add_emplacement.php" id = "newEmplacement">

    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="zone" value="3"  /> <label for="3">3</label><br/>

    <label for="type">Type d'emplacement :</label>
    <?php
    include("database/add_emplacement.php");
    listTypeEmplacement();
    ?>
    <br/>

    <label for="nombre">Nombre :</label>
    <input type="number" name="nombre" value="1" min="1" max="999"/><br/>



    <input type="submit" value="Submit" id="submit"/>

</form>

<h1>Liste des clients de la table</h1>
<div id="view">
    <p>
        Y'a personne wesh
    </p>
</div>
<script type="text/javascript" src="js/jquery.js"></script>



<!-- Le pied de page -->

<?php include("template/footer.php"); ?>

</body>
</html>