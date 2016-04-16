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

    <label for="vehicule">Type de véhicule :</label>
    <select name="vehicule" id="vehicule">
        <option value="voiture">Voiture</option>
        <option value="moto">Moto</option>
    </select><br/>

    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="zone" value="3"  /> <label for="3">3</label><br/>

    <input type="submit" value="Submit" id="submit"/>

</form>

<h1>Liste des clients de la table</h1>
<div id="view">
    <p>
        Y'a personne wesh
    </p>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script>

    $(document).ready(function(e) {

        $.get('database/zone_view.php',function(data) {
              $('#view').html(data);
        });


        $('#newClient').submit(function(e) {
            e.preventDefault();

            //On met a jour la database
            var $this = $(this);
            var plaque = $('#plaque').val();
            var vehicule = $('#vehicule').val();
            var zone = $('#zone').val();
            var donnees = $this.serialize();

            if(plaque === '') {
                alert("Le numéro de plaque n'est pas renseignée");
            }
            else {

                $.post('database/add_client.php', donnees);
            }

            //On met a jour le visu
            $.get('database/zone_view.php',function(data) {
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