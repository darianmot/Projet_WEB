<!DOCTYPE html>

<?php include("template/head.php"); ?>

<body>


<?php include("template/menu.php"); ?>

<!-- Le corps -->
<h2>Ajouter des emplacements</h2>
<form method="POST" action="database/zone_manager.php" id="newPlace">

    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="id_zone" value="1" checked="checked"/> <label for="1">1</label>
    <input type="radio" name="id_zone" value="2"/> <label for="2">2</label>
    <input type="radio" name="id_zone" value="3"/> <label for="3">3</label><br/>

    <label for="type">Type d'emplacement :</label>
    <?php
    include("database/add_places.php");
    listTypeVehicule();
    ?>
    <br/>

    <label for="nombre">Nombre :</label>
    <input type="number" name="nombre" id="nombre" value="1" min="1" max="999"/><br/>


    <input type="submit" value="Submit" id="submit"/>

</form>

<script type="text/javascript" src="js/gestion.js"></script>
<div id="message">
</div>



<!-- Le pied de page -->

<?php include("template/footer.php"); ?>

</body>
</html>