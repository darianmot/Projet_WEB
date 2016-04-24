<!DOCTYPE html>
<?php include("template/head.php"); ?>

<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<form method="post" action="" enctype="multipart/form-data">

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
                <select name="type" size="1">
                    <option>Voiture</option>
                    <option>Moto</option>
                </select>
            </div>

            <div class="col-md-3">
                <input type="checkbox" name="handicap" value="1">Véhicule handicapé ?
            </div>

            <div>
                <button type="submit" name="button_reserv">Réserver maintenant !</button>
            </div>

        </div>

    </div>



</form>
</html>
