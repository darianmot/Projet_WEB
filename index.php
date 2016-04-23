
<!DOCTYPE html>
<!--salut c'est moi hehe-->
<html>

<?php include("template/head.php"); ?>

<body>
<?php include("template/header.php"); ?>

<?php include("template/menu.php"); ?>
<!--En-tete-->
<div class="entete">
    <h1>parking aeroport enac</h1>
</div>

<!-- Le corps -->

<h1>Bienvenue dans votre parking Car'Park !</h1>

<!-- slider -->
<div class="slider">
    <?php include("template/slider.php"); ?>
</div>



<!--<div>-->
<!--    <img src="media/images/accueil_park.jpg">-->
<!--    <img src="media/images/ferrari.jpg">-->
<!--</div>-->

<!-- Image de pub-->
<!--<div class="img_center">-->
<!--    <img src="media/images/parking.jpg">-->
<!--</div>-->

<!--Formulaire de réservation rapide -->


<?php include('formulaire_reservation.php') ?>

<!--La carte-->

<div class="map">
    <?php include("template/carte.php"); ?>
</div>

<!-- Le pied de page -->
<?php include("template/footer.php"); ?>


<!--<div class="bouton">-->
<!--    <a href="reservation.php " ><input type="button" value="Acheter une place"></a>-->
<!--    <a href="connexion.php"><input type = "button" value="Se connecter"></a>-->
<!--</div>-->

</body>
</html>