<!DOCTYPE html>

<html>
<head>
<?php include("template/head.php"); ?>
    <script type="text/javascript" src="js/reservation.js"></script>
</head>

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

        </br>
        

        <div class="row">

            <!-- Type de Véhicule -->
            <div class="col-md-3">
                <label>Type de véhicule</label><select class="select_reserv" name="type" size="1">
                    <option value="" disabled selected hidden>Type de véhicule</option>
                    <?php
                    include("database/type_vehicule.php");
                    $type_manager = new TypeManager();
                    $type_manager->typeList();?>
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
                <input name="zone_price" type="radio"  value="1"  /> <label for="1">1</label>
                <input name="zone_price" type="radio"  value="2"  /> <label for="2">2</label>
                <input name="zone_price" type="radio"  value="3"  /> <label for="3">3</label><br/>

            </div>
        </div>
        
        <div class="row" id="disp_price">

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
        </br>Réservez votre place de parking 24h/24 7j/7 grâce à votre espace client.
        </br>Sélectionnez les informations requises et cliquez sur "Réserver maintenant".
    </div>

    </br>
    </br>





</form>
</html>

