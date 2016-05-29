<!DOCTYPE html>
<html>
<head>
    <?php include("template/head.php") ?>
</head>
<body>
<?php include("template/menu.php")?>

<h1>Espace Client</h1>

<?php
$prenom = $_SESSION['prenom'];
$nom = $_SESSION['nom'];
echo "Bienvenue $prenom $nom"
?>

<div class="container">

    <div class="row">

        <a href="compte_personal_data.php">
            <div class="col-md-3 bulle_compte ">
                <i class="fa fa-3x fa-info-circle" aria-hidden="true"></i>
                <br/>Mes Infos
            </div>
        </a>

        <a href="user_vehicule.php">
            <div class="col-md-3 bulle_compte ">
                <i class="fa fa-3x fa-car" aria-hidden="true"></i>
                <br/>Gérer mes véhicules
            </div>
        </a>
    </div>


    <div class="row">
        <a href="formulaire_reservation.php">
            <div class="col-md-3 bulle_compte ">
                <i class="fa fa-3x fa-shopping-cart" aria-hidden="true"></i>
                <br/>Réserver
            </div>
        </a>
        
        <a href="history.php">
            <div class="col-md-3 bulle_compte">
                <i class="fa fa-3x fa-history" aria-hidden="true"></i>
                <br/> Mes Réservations
            </div>
        </a>

        
    </div>

    <div class="row">
        <a href="solde.php">
            <div class="col-md-3 bulle_compte" href="solde.php">
                <i class="fa fa-3x fa-credit-card-alt" aria-hidden="true"></i>
                <br/> Mon Solde
            </div>
        </a>


    </div>



</div>




</body>
</html>
