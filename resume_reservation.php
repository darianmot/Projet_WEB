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
<div class="row">

    <div class="col-md-3">
        <input class="encart_prix" type="number" name="duree_jours" placeholder="Jours">
    </div>

    <div class="col-md-3">
        <input class="encart_prix" type="number" name="duree_hour" placeholder="Heures">
    </div>

    <div class="col-md-3">
        <input class="encart_prix" type="number" name="duree_min" placeholder="Minutes">
    </div>
</div>

<div >
    <h3>Sélectionnez la zone parking</h3>
    <label for="zone" id="zone">Zone :</label>
    <input type="radio" name="zone" value="1" checked="checked" /> <label for="1">1</label>
    <input type="radio" name="zone" value="2"  /> <label for="2">2</label>
    <input type="radio" name="zone" value="3"  /> <label for="3">3</label><br/>

    <br/> Estimation tarifaire à définir et à faire


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
    