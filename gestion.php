<!DOCTYPE html>
<head>
<?php include("template/head.php"); ?>
</head>
<html>
<body>


<?php include("template/menu.php"); ?>

<!-- Le corps -->
<h1>Ajouter des emplacements</h1>
<form method="POST"  id="newPlace">

    <label for="zone" id="view_zone">Zone :</label>
    <input type="radio" name="id_zone" value="1" checked="checked"/> <label for="1">1</label>
    <input type="radio" name="id_zone" value="2"/> <label for="2">2</label>
    <input type="radio" name="id_zone" value="3"/> <label for="3">3</label><br/>

    <label for="type">Type d'emplacement :</label>
    <?php
    include("database/type_vehicule.php");
    $type_manager = new TypeManager();
    $type_manager->typeList();
    ?>
    <br/>

    <label for="nombre">Nombre :</label>
    <input type="number" name="nombre" id="nombre" value="1" min="1" max="999"/><br/>


    <input type="submit" value="Ajouter" id="submit_newPlace"/>

</form>

<h1>Modifier les tarifs</h1>
<form method="POST"  id="setTarif">

    <label for="tarif1">Tarif Zone 1 :</label>
        <input type="text" class='tarif' id='tarif1'/><br/>
    <label for="tarif2">Tarif Zone 2 :</label>
        <input type="text" class="tarif" id='tarif2'/><br/>
    <label for="tarif3">Tarif Zone 3 :</label>
        <input type="text" class="tarif" id='tarif3'/><br/>
    <input type="button" value="Valider les modifications" id="submit_setTarif"/>
    
</form>
<div class = tarifs_graph id="div_graph" style="height:600px;width:700px;"></div>
<script type="text/javascript" src="js/gestion.js"></script>
<div id="msg">
</div>




</body>
</html>