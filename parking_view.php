<!DOCTYPE html>
<!--salut c'est moi hehe-->
<html xmlns="http://www.w3.org/1999/html">
<?php include("template/head.php"); ?>

<body>

<?php include("template/header.php"); ?>

<?php include("template/menu.php"); ?>

<!-- Le corps -->

<form method="post" id = "newClient">
    
    <label for="plaque">Plaque :</label>
    <input type="text" name="plaque" id="plaque" /><br/>

    <label for="type">Type de véhicule :</label>
    <?php include "database/add_places.php";
    listTypeEVehicule() ?>

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
<script type="text/javascript" src="js/jquery.js"></script>
<script>

    $(document).ready(function(e) {
        $.ajaxSetup({async: false});//Evite de poursuivre le script avant que les requetes ajax soit finies

        $.post('database/zone_view.php', {
                id_zone: 1,
                lg_table: 10
            },
            function (data) {
                $('#view').html(data);
        });


        $('#newClient').submit(function(e) {
            e.preventDefault();

            //On met a jour la database
            var $this = $(this);
            var plaque = $('#plaque').val();
            var zone = $('input[name="zone"]:checked').val()
            var donnees = $this.serialize() + "&id_zone=" + zone;
            if(plaque === '') {
                alert("Le numéro de plaque n'est pas renseignée");
            }
            else {
                $.post('database/add_vehicule.php', donnees);
            }
            //On met a jour le visu
            $.post('database/zone_view.php', {
                    id_zone: zone,
                    lg_table: 10
                },
                function (data) {
                $('#view').html(data);
            });

            //On reset le form
            $('#newClient')[0].reset();
        });
    });
</script>


<!-- Le pied de page -->

<?php include("template/footer.php"); ?>

</body>
</html>