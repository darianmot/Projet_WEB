<!DOCTYPE html>

<html>
<head>
<?php include("template/head.php"); ?>
    <script type="text/javascript" src="js/reservation.js">
    </script>
</head>

<body>
    <?php include("template/menu.php")?>
    <br/>

    <form method="post" id = "form_reservation" action="resume_reservation.php" enctype="multipart/form-data">


        <input type="hidden" name="price_input" value="0" />

        <div class="container reserv">
            <div class="row">
                <div class="col-md-6">
                    <h3>Réservez votre place ici </h3>
                </div>
            </div>

            <br/>


            <div class="row">

                <!-- Type de Véhicule -->
                <div class="col-md-3">
                    <label for="selection_vehicule">Mon véhicule</label><select class="select_reserv" name="selection_vehicule" size="1">
                        <option value="" disabled selected hidden>Mon véhicule</option>
                        <?php
                        include("database/get_list_vehicule.php");
                        $number_vehicule = count($_SESSION['user_vehicule']);
                        for($i=0 ; $i<$number_vehicule; ++$i){
                            echo "
                                <option value='{$_SESSION['user_vehicule'][$i]['plaque']}'>  Type: {$_SESSION['user_vehicule'][$i]['type_vehicule']} Plaque: {$_SESSION['user_vehicule'][$i]['plaque']} </option>
                            ";
                        }


                        ?>
                    </select>
                </div>

                <!-- Dates-->
                <div class="col-md-3">
                    <label>Date et horaire d'entrée</label><input type="text" class="encart_datepicker" name="entry_date" placeholder="Date et horaire d'entrée" id="entry_date">
                </div>

                <!--<div class="col-md-3">
                    <label>Horaire d'entrée</label><input type="text" class="encart_timepicker" name="entry_time" placeholder="Horaire d'entrée">
                </div>-->
                <div class="col-md-3">
                    <label>Date et horaire de sortie</label><input type="text" class="encart_datepicker" name="exit_date" placeholder="Date et horaire de sortie" id="exit_date">
                </div>
            </div>

            </br>


            <div class="row">
                <div id="zone_select" >
                    <h3>Sélectionnez la zone parking</h3>
                    <label for="zone" id="zone">Zone :</label>
                    <input name="id_zone" type="radio"  value="1"  /> <label for="1">1</label>
                    <input name="id_zone" type="radio"  value="2"  /> <label for="2">2</label>
                    <input name="id_zone" type="radio"  value="3"  /> <label for="3">3</label><br/>

                </div>
            </div>

            <div class="row zone_price" id="disp_price">

                <!-- Complétage par script price.js -->
            </div>
            <div class="row">
                <!-- Bouton de validation -->
                <div class="col-md-pull-2">
                    <button type="submit" class="button_reserv">Réserver maintenant </button>
                </div>
            </div>
        </div>

        <h1>Vos Réservations en toute sérénité</h1>
        <div>
            Faites confiance en l'expertise Car'Park !
            <br/>Réservez votre place de parking 24h/24 7j/7 grâce à votre espace client.
            <br/>Sélectionnez les informations requises et cliquez sur "Réserver maintenant".
        </div>

        <br/>
        <br/>





    </form>
</body>
<script>
    $('#form_reservation').submit(function (e) {
        var entry_date = new Date($('input[name = "entry_date"]').val()+':00');
        var exit_date = new Date($('input[name = "exit_date"]').val()+':00');
        var id_zone = $('input[name="id_zone"]:checked').val();
        var duree = dateDiff(entry_date, exit_date);
        var duree_in_hours = (duree.day * 24 + duree.hour);
        var prix_total =  prix(id_zone, duree_in_hours);

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
        console.log('Solde : ', solde);
        if(solde<prix_total)
        {
            e.preventDefault();
            $.fancybox({content: "Votre solde n'est pas suffisant pour cette réservation"});
        }
        else
        {
            return true
        }
    });
</script>
</html>

