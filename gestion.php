<!DOCTYPE html>
<header>
<?php include("template/head.php"); ?>
</header>
<body>


<?php include("template/menu.php"); ?>

<!-- Le corps -->
<h2>Ajouter des emplacements</h2>
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


    <input type="submit" value="Submit" id="submit"/>

</form>

<script type="text/javascript" src="js/gestion.js"></script>
<div id="msg">
</div>



<!-- Le pied de page -->

<?php include("template/footer.php"); ?>

</body>
</html>