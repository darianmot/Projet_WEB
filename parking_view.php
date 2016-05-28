<!DOCTYPE html>
<html>
<head>
<?php include("template/head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/parking_view.css"/>
<script type="text/javascript" src="js/parking_view.js"></script>
</head>
<?php include("template/menu.php"); ?>


<body>


<!-- Le corps -->
<h1>Ajouter un véhicule</h1>
<form method="post" id="newStationnement">
    
    <label for="plaque">Plaque :</label>
    <input type="text" name="plaque" id="plaque" /><i title="Générer une plaque aléatoirement" class="fa fa-random" aria-hidden="true" id="random"></i>
    <br/>

    <label for="type">Type de véhicule :</label>
    <?php
    include("database/type_vehicule.php");
    echo '<select name="type" id="type">';
    $type_manager = new TypeManager();
    $type_manager->typeList();
    echo '</select>'
    ?>
    <br/>

    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="zone" value="3"  /> <label for="3">3</label><br/>

    <input type="submit" value="Submit" id="submit"/>

</form>

<h1>Visualiser les zones</h1>
<p>Cliquez sur une place pour obtenir des informations</p>
<form method="post">
    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="view_zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="view_zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="view_zone" value="3"  /> <label for="3">3</label>
</form>
<div id="view">
    <p>
       Zone sans emplacement
    </p>
</div>

<!-- Fenetre modale pour les infos d'une place -->
<!--<div id="place_info"></div>-->

<!--Messages d'erreur-->
<!--<div id="error_window"> </div>-->

<!-- Le pied de page -->
<?php //include("template/footer.php"); ?>

</body>


</html>