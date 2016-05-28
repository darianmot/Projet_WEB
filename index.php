
<!DOCTYPE html>
<html>

<head>
<?php include("template/head.php"); ?>
</head>

<body>
<?php include("template/menu.php"); ?>

<!-- Le corps -->




<!-- slider -->
<div class="slider">
    <?php include("template/slider.php"); ?>
</div>



</br></br>

<div class="pub">
    </br>
    <h2>Bienvenue sur Car'Park, le leader des solutions parking pour tout véhicule <i class="fa fa-2x fa-thumbs-o-up" aria-hidden="true"></i></h2>
    Faites confiance dans "l'expertise" de Car'Park et confiez nous votre véhicule pour quelques heures, voire même quelques jours si vous aimez le risque !
    </br> Car'Park c'est un parking sécurisé et facile d'accès pour les voyous (0 vigile sur place) et les hackers (0 expert informatique) qui vous offre le meilleur service au prix qu'on a voulu.
    <h3> <i class="fa fa-2x fa-check-square" aria-hidden="true"></i> La garantie Satisfait ou Remboursé ! Lol non on rembourse pas</h3>
    Nous avons à coeur de vous fournir le meilleur, mais on aime bien les thunes aussi.
    <h3> <i class="fa fa-2x fa-eur" aria-hidden="true"></i> Des économies sur toute la ligne ! Surtout pour nous</h3>
    Nous vous garantissons les tarifs les plus haut du marché. Suivez vos dépenses et créditez <b>UN MAX</b> votre solde en toute sécurité depuis votre espace client.

</div>










<!--Proposition de connexion -->
<div class="container reserv" id="invit_connexion">

    <h1>Réservation</h1>
    <h3>Réservez votre place dans notre parking grâce à votre espace client en ligne !</h3>
    <h4>Réservation immédiate et sécurisée </h4>
    <?php
        session_start();
        if (isset($_SESSION['identifiant'])) {

            echo('
                <a href="mon_compte.php"> <button type="button" class="button_reserv" >Mon Compte</button></a>
            ');
        }

        else{

        echo ('
            <div class="row">

                <div class="col-md-3 col-md-offset-2">
                    <a href="connexion_page.php"> <button type="button" class="button_reserv" >Me connecter</button></a>
                </div>
    
                <div class="col-md-3 col-md-offset-1">
                    <a href="inscrire_page.php"> <button type="button" class="button_reserv" >Créer mon compte</button></a>
                 </div>

            </div>
        
       ');
    }

    ?>



</div>



</br></br>


<!-- Le pied de page -->
<?php include("template/footer.php"); ?>


<!--<div class="bouton">-->
<!--    <a href="reservation.php " ><input type="button" value="Acheter une place"></a>-->
<!--    <a href="connexion.php"><input type = "button" value="Se connecter"></a>-->
<!--</div>-->

</body>
</html>