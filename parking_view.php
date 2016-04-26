<!DOCTYPE html>
<!--salut c'est moi hehe-->
<html xmlns="http://www.w3.org/1999/html">
<?php include("template/head.php"); ?>

<body>

<?php include("template/header.php"); ?>

<?php include("template/menu.php"); ?>

<!-- Le corps -->

<form method="post" id="newStationnement">
    
    <label for="plaque">Plaque :</label>
    <input type="text" name="plaque" id="plaque" /><br/>

    <label for="type">Type de véhicule :</label>
    <?php include "database/add_places.php";
    listTypeVehicule() ?>

    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="zone" value="3"  /> <label for="3">3</label><br/>

    <input type="submit" value="Submit" id="submit"/>

</form>

<h1>Liste des stationnements de la table</h1>

<div id="view">
    <p>
        Y'a personne wesh
    </p>
</div>

<div id="place_info">
    Cliquer sur une place pour afficher les détails
</div>

<script type="text/javascript" src="js/parking_view.js"></script>

<!-- Le pied de page -->

<?php include("template/footer.php"); ?>

</body>


</html>