
<!DOCTYPE html>
<html>

<?php include("template/head.php"); ?>

<body>
<?php include("template/header.php"); ?>

<?php include("template/menu.php"); ?>
<!--En-tete-->
<!--<div class="entete">-->
<!--    Le meilleur parking-->
<!--</div>-->

<!-- Le corps -->
<div class="titre">
    <img src="./media/images/logo2.png">
</div>

<!-- slider -->
<div class="slider">
    <?php include("template/slider.php"); ?>
</div>


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