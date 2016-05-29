<!DOCTYPE html>

<html>
<head>
    <?php include("template/head.php"); ?>
</head>

<body>
<?php include("template/menu.php")?>

<h1>Historique de vos commandes</h1>

<div id='facture_table'></div>

<script>
    $(document).ready(function () {
        var donnees =$(this).serialize()+'&id_form=getBill' + '&id=' + '<?php echo $_SESSION['identifiant']?>';
        $.ajax({
            type: "POST",
            url: "database/client_manager.php",
            dataType: 'text',
            data: donnees,
            async: false,
            success: function (retour) {
                $('#facture_table').html(retour)
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
