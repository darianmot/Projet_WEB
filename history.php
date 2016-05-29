<!DOCTYPE html>

<html>
<head>
    <?php include("template/head.php"); ?>
</head>

<body>
<?php include("template/menu.php")?>

<h1>Historique de vos commandes</h1>

<?php
include ("database/get_list_vehicule.php");
$number_vehicule = count($_SESSION['user_vehicule']);

for ($i = 0; $i<$number_vehicule; ++$i){
    $vehicule = $_SESSION['user_vehicule'][$i];
    echo "</br>Véhicule: {$vehicule['plaque']} Type: {$vehicule['type_vehicule']}";
    echo "</br><div class='bill_vehicule container'></div>";
    
}
?>


<script>
    $('.bill_vehicule').ready(function () {
        var plaque = "<?php echo $vehicule['plaque'] ?>";
        alert(plaque);
        var donnees =$(this).serialize()+'&id_form=getBill' + '&id=' + '<?php echo $_SESSION['identifiant']?>' + '&plaque=' + plaque;
        $.ajax({
            type: "POST",
            url: "database/client_manager.php",
            dataType: 'text',
            data: donnees,
            async: false,
            success: function (retour) {
                var number_bill = retour.length;
                for(var i=0; i<number_bill; i++) {
                    var bill = retour[i];
                    var id_facture = bill[0];
                    var id_stationnement = bill[1];
                    var date_debut = bill[2];
                    var date_fin = bill[3];
                    var prix = bill[4];
                    $(this).append("</br><div class='bill_of_vehicule row'>" + "Facture: " + id_facture + "Stationnement: " + id_stationnement + "Début: " + date_debut + "Fin: " + date_fin + "Prix: " + prix + "</div>")
                }
            },

            error: function (retour) {
                alert('Echec critique');
                alert(retour);

            }
        })
    })
</script>








</body>
</html>
