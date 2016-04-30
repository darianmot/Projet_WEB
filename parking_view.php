<!DOCTYPE html>
<!--salut c'est moi hehe-->
<html>
<?php include("template/head.php"); ?>

<body>


<?php include("template/menu.php"); ?>

<!-- Le corps -->

<form method="post" id="newStationnement">
    
    <label for="plaque">Plaque :</label>
    <input type="text" name="plaque" id="plaque" /><br/>

    <label for="type">Type de véhicule :</label>
    <?php
    include("database/type_vehicule.php");
    $type_manager = new TypeManager();
    $type_manager->typeList();
    ?>

    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="zone" value="3"  /> <label for="3">3</label><br/>

    <input type="submit" value="Submit" id="submit"/>

</form>

<h1>Visualiser les zones</h1>
<form method="post">
    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="view_zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="view_zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="view_zone" value="3"  /> <label for="3">3</label>
</form>
<div id="view">
    <p>
        Y'a personne wesh
    </p>
</div>

<!-- Fenetre modale pour les infos d'une place -->
<div id="place_info">
</div>


<!-- Le pied de page -->
<?php //include("template/footer.php"); ?>

</body>


</html>