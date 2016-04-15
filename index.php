<!DOCTYPE html>
<!--salut c'est moi hehe-->
<html>
<?php include("template/head.php"); ?>

<body>

<?php include("template/header.php"); ?>

<?php include("template/menu.php"); ?>

<!-- Le corps -->

<div>
    <h1>Bienvenue dans votre parking</h1>
</div>

<!--<div>-->
<!--    <img src="media/images/accueil_park.jpg">-->
<!--    <img src="media/images/ferrari.jpg">-->
<!--</div>-->

<!-- slider -->
<div>
    <?php include("template/slider.php"); ?>
</div>

<div class="bouton">
    <a href="reservation.php " ><input type="button" value="Acheter une place"></a>
    <a href="connexion.php"><input type = "button" value="Se connecter"></a>
</div>

<!-- Le pied de page -->

<?php include("template/footer.php"); ?>

</body>
</html>