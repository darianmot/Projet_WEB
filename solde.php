<!DOCTYPE html>

<html>
<head>
    <?php include("template/head.php"); ?>
</head>

<body>
<?php include("template/menu.php")?>

<h1>Votre Solde Car'Park</h1>

<div id="solde" class="zone_montant">

</div>

<h2>Créditer mon solde</h2>
<form id="add_solde">
    <label>Ajouter ce montant à mon solde <input class="encart_reserv" type="text" placeholder="Montant" name="add_montant"> </label>
    </br><button type="submit" class="button_reserv" id="button_add_solde">Créditer</button>
</form>


<script>
    $('#add_solde').ready(function () {
        var solde = 0;
        var donnees =$(this).serialize()+'&id_form=getSolde' + '&id=' + '<?php echo $_SESSION['identifiant']?>';
        console.log(donnees);
        $.ajax({
            type: "POST",
            url: " database/client_manager.php",
            dataType: 'text',
            data: donnees,
            async: false,
            success: function(retour)
            {
                solde = retour;
                $('#solde').empty().append(solde +' €')

            },
            error: function(retour)
            {
                console.log('erreur');
                if (retour.status == 200) {
                    console.log('warning due à la non synchronisation des requetes ajax')
                }
                else {
                    console.log(retour)
                }
            }
        });
    });

    $('#add_solde').submit(function () {
        var montant = $('input[name = "add_montant"]').val();
        var donnees =$(this).serialize()+'&id_form=addSolde' + '&id=' + '<?php echo $_SESSION['identifiant']?>' + '&montant=' + montant  ;
        console.log(donnees);
        $.ajax({
            type: "POST",
            url: "database/client_manager.php",
            dataType: 'text',
            data: donnees,
            async: false,
            success: function () {
                $('#add_solde').empty().loader('show');
                window.location.href=('solde.php')
            },

            error: function () {
                alert("L'opération a échoué")
            }
        })
    })
    
</script>
</body>
</html>