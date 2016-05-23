<!DOCTYPE html>

<html>
<header>
<?php include("template/head.php"); ?>
</header>

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
                    <option>Voiture</option>
                    <option>Moto</option>
                    <option>Handicapé</option>
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
    


</form>
</html>

