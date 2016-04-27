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

        <div class="row">
            <div class="col-md-3">
                <input class="encart_reserv" type="text" name="nom" placeholder="Nom"/>
            </div>

            <div class="col-md-3">
                <input class="encart_reserv" type="text" name="prenom" placeholder="Prenom"/>
            </div>

            <div class="col-md-3">
                <input class="encart_reserv" type="text" name="immatriculation" placeholder="N° d'immatriculation"/>
            </div>
        </div>

        </br>

        <div class="row">
            <div class="col-md-3">
                <select class="select_reserv" name="type" size="1">
                    <option>Voiture</option>
                    <option>Moto</option>
                </select>
            </div>

            <div class="col-md-3">
                <input type="checkbox" name="handicap" value="1">
                <label for="Véhicule handicapé ?">Véhicule handicapé ?</label>
            </div>

            <div class="col-md-3">
                <input type="date" name="date_reservation">
            </div>

            <div class="col-md-3">
                <button type="submit" class="button_reserv">Réserver maintenant !</button>
            </div>

        </div>

    </div>



</form>
</html>
