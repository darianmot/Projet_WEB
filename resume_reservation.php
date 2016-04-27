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
<h3>Durée de la réservation</h3>
<form method="post">
<div class="row">

    <div class="col-md-3">
        <label>Jours</label> <input class="encart_prix" type="number" name="duree_jours" placeholder="Jours" min="0" value="<?php if ( isset($_POST['duree_jours']) ) echo htmlentities($_POST['duree_jours']) ?>">
    </div>

    <div class="col-md-3">
        <label>Heures</label><input class="encart_prix" type="number" name="duree_hours" placeholder="Heures" min="0" max="23" value="<?php if ( isset($_POST['duree_hours']) ) echo htmlentities($_POST['duree_hours']) ?>">
    </div>

    <div class="col-md-3">
        <label>Minutes</label><input class="encart_prix" type="number" name="duree_min" placeholder="Minutes" min="0" max="59" value="<?php if ( isset($_POST['duree_min']) ) echo htmlentities($_POST['duree_min']) ?>">
    </div>
</div>
</form>
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
    A compléter (Darius HEEEEEEEEELP :p)


</div>


<h3>Récapitulatif de vos informations</h3>

<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$type = $_POST['type'];
$plaque = $_POST['immatriculation'];
$handicap = $_POST['handicap'];
echo "Réservation au nom de $nom $prenom";
echo "<br/> Véhicule: $type";
echo "<br/> N° d'immatriculation: $plaque";
if ($handicap) {
    echo "<br/> -> Place handicapé";
}

?>
<br/> <br/>
<button type="submit" class="button_reserv">Finaliser la commande !</button>

<?php include ("template/footer.php");?>
</body>
</html>
    