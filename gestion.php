<!DOCTYPE html>
<head>
<?php include("template/head.php"); ?>
</head>
<html>
<body>


<?php include("template/menu.php"); ?>

<!-- Le corps -->

<?php
if (isset($_SESSION['isAdmin']))
{
        echo '<h1>Ajouter des emplacements</h1>
<form  id="newPlace">

    <label for="zone" id="view_zone">Zone :</label>
    <input type="radio" name="id_zone" value="1" checked="checked"/> <label for="1">1</label>
    <input type="radio" name="id_zone" value="2"/> <label for="2">2</label>
    <input type="radio" name="id_zone" value="3"/> <label for="3">3</label><br/>

    <label for="type">Type d\'emplacement :</label>';

    include("database/type_vehicule.php");
    include_once "database/zone_manager.php";
    echo '<select name="type" id="type">';
    $type_manager = new TypeManager();
    $type_manager->typeList();
    $connection = new connection();
    $bdd  = $connection->getBdd();
    $zone = new ZoneManager($bdd, 1);
    echo '</select>
                <br/>
        
            <label for="nombre">Nombre :</label>
                <input type="number" name="nombre" id="nombre" value="0" min="1" max="999"/><br/>
            <button type="button" class="button_reserv" id="submit_newPlace">Ajouter</button>
            <button type="button" class="button_reserv" id="submit_delPlace">Supprimer</button>
        </form>';
    echo "Vous pouvez supprimer <b id='freecapacity'>".$zone->effectiveCapacityByType('handicape')."</b> places de ce type au maximum (car elle ne sont ni occupées ni reservées)." ;





    echo '<h1>Modifier les tarifs</h1>
        <div class="row">
            <div class="formulaire container">
                <div class="col-md-3 col-md-offset-2">
        
                    <form method="POST"  id="setTarif">
                        <label for="tarif1">Tarif Zone 1 :</label>
                            <input type="text" class="tarif" id="tarif1"/><br/>
                        <label for="tarif2">Tarif Zone 2 :</label>
                            <input type="text" class="tarif" id="tarif2"/><br/>
                        <label for="tarif3">Tarif Zone 3 :</label>
                            <input type="text" class="tarif" id="tarif3"/><br/>
                        <input type="button" class="button_reserv" value="Valider les modifications" id="submit_setTarif"/>
                    </form>
        
                </div>
        
                <div class="col-md-3 col-md-offset-1">
                    <div class = "tarifs_graph" id="div_graph" style="height:400px;width:500px"></div>
                </div>
        
        </div>
        
        
        <script type="text/javascript" src="js/gestion.js"></script>
        <div id="msg">
        </div>';
}
else{
    echo "Vous n'avez pas les droits pour accéder à cette page";
}
?>



</body>
</html>