<!DOCTYPE html>

<html>
<?php include("template/head.php"); ?>


<form method="post" action="resume_reservation.php" enctype="multipart/form-data">

    <div class="container reserv">
        <div class="row">
            <div class="col-md-6">
                <h3>Réservez votre place ici !</h3>
            </div>
        </div>

        </br>
        
        </br>

        <div class="row">

            <!-- Type de Véhicule -->
            <div class="col-md-3">
                <label>Type de véhicule</label><select class="select_reserv" name="type" size="1">
                    <option value="" disabled selected hidden>Type de véhicule</option>
                    <option>Voiture</option>
                    <option>Moto</option>
                </select>
            </div>

            <!-- Dates-->
            <div class="col-md-3">
                <label>Date d'entrée</label><input type="text" class="encart_datepicker" name="entry_date" placeholder="Date d'entrée">
            </div>

            <div class="col-md-3">
                <label>Horaire d'entrée</label><input type="text" class="encart_timepicker" name="entry_time" placeholder="Horaire d'entrée">
            </div>

        </div>

        </br>

        <div class="row">
            <!-- Checkbox véhicule handicapé -->
            <div class="col-md-3">
                <input type="checkbox" name="handicap" value="1">
                <label for="Véhicule handicapé ?">Véhicule handicapé ?</label>
            </div>

            <div class="col-md-3">
                <label>Date de sortie</label><input type="text" class="encart_datepicker" name="exit_date" placeholder="Date de sortie">
            </div>


            <div class="col-md-3">
                <label>Horaire de sortie</label><input type="text" class="encart_timepicker" name="exit_time" placeholder="Horaire de sortie">
            </div>
            
        </div>

        </br>

        <div class="row">
            <!-- Bouton de validation -->
            <div class="col-md-pull-2">
                <button type="submit" class="button_reserv">Réserver maintenant !</button>
            </div>
        </div>


    </div>



</form>
</html>

