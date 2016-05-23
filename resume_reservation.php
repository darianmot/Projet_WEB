<!DOCTYPE html>

<html>
<?php include("template/head.php");?>

<body>
<?php include("template/menu.php");?>

<!-- Logo -->
<div class="titre">
    <img src="./media/images/logo2.png">
</div>

<!-- Début résumé -->

<h2>Etape 2: Complétez les informations requises</h2>

<h3>Votre réservation</h3>

<?php include("date_price_calculator.php") ?>

</br>


<div id="zone_select" >
    <h3>Sélectionnez la zone parking</h3>
    <label for="zone" id="zone">Zone :</label>
    <input name="zone_price" type="radio"  value="1"  /> <label for="1">1</label>
    <input name="zone_price" type="radio"  value="2"  /> <label for="2">2</label>
    <input name="zone_price" type="radio"  value="3"  /> <label for="3">3</label><br/>

    <br/>

    <div id="disp_price">
        
            <!-- Complétage par script price.js -->
    </div>
        <button type="submit" id="button_price" class="button_price">Estimer mon prix !</button>


</div>

<div>
    <h3>Sélectionnez une place de parking</h3>
    <button type="button" id = 'price'>test prix </button>


</div>


<br/> <br/>
<button type="submit" class="button_reserv">Continuer</button>

<?php include ("template/footer.php");?>
</body>
</html>
    