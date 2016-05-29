<!DOCTYPE html>
<html>
<head>
<?php include("template/head.php");?>
    <link rel = "stylesheet" type = "text/css" href = "css/parking_view.css" />
</head>
<?php include("template/menu.php"); ?>


<body>
<!-- Le corps -->
<?php if (isset($_SESSION['isAdmin'])) {
    echo  '<script type = "text/javascript" src = "js/parking_view.js" ></script >';
    echo '<h1>Ajouter un véhicule</h1>
        <form method="post" id="newStationnement">
            
            <label for="plaque">Plaque :</label>
            <input type="text" name="plaque" id="plaque" /><i title="Générer une plaque aléatoirement" class="fa fa-random" aria-hidden="true" id="random"></i>
            <br/>
        
            <label for="type">Type de véhicule :</label>';
            include("database/type_vehicule.php");
            echo '<select name="type" id="type">';
            $type_manager = new TypeManager();
            $type_manager->typeList();
            echo '</select>            
            <br/>        
            <label for="zone" id="zone">Zone :</label>
            <input type="radio" name="zone" value="1" checked="checked" /> <label for="1">1</label>
            <input type="radio" name="zone" value="2"  /> <label for="2">2</label>
            <input type="radio" name="zone" value="3"  /> <label for="3">3</label><br/>
        
            <input type="submit" value="Submit" id="submit"/>
        
        </form>';
}
else{
    echo "<script>
          $(document).ready(function() {
            var lg_table = 30;
            $.post('database/zone_manager.php', {
                id_zone: 1,
                lg_table: lg_table,
                id_form: 'zoneView'
                },
                function (data) {
                    $('#view').html(data);
            });
            $('input[name=\"view_zone\"]').change(function () {
                var id_zone = $('input[name=\"view_zone\"]:checked').val();
                $.post('database/zone_manager.php', {
                    id_zone: id_zone,
                    lg_table: lg_table,
                    id_form: 'zoneView'
                    },
                    function (data) {
                        $('#view').html(data);
                    });
            });
          })
          </script>
          ";
}
?>
<h1>Visualiser les zones</h1>
<form method="post">
    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="view_zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="view_zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="view_zone" value="3"  /> <label for="3">3</label>
</form>
<div id="view">
    <p>
       Rien à afficher
    </p>
</div>



<!-- Le pied de page -->
<?php //include("template/footer.php"); ?>

</body>


</html>