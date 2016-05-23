<?php
// demarrage de la session
session_start();
// creation des variables de session
?>
<?php $nav_en_cours=""; ?>

<div class="titre">
    <a href='index.php'>
        <img src="./media/images/logo2.png">
    </a>
</div>

<nav > 
        <ul id="menu_nav">
            <li>
                <a href='index.php'>
                    <span class="fa-stack fa-lg">
                    <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                </span>
                </a>
            </li>
            <li <?php if ($nav_en_cours == 'cv.php') {echo ' id="en-cours"';} ?>><a href="cv.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Nos offres</a></li>
            <li <?php if ($nav_en_cours == 'Plan des parkings') {echo ' id="en-cours"';} ?>><a href="parking_view.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>Plan des parkings</a></li>
            <li><a href='access.php'><i class="fa fa-map-marker" aria-hidden="true"></i>Plan d'accès</a></li>
            <?php
            if (isset($_SESSION['identifiant']))
            {
                echo("<li id='mon_compte_menu'> <li id = 'voiture'>
                       <span class='fa-stack fa-lg'>
                       <i class='fa fa-user fa-stack-1x fa-inverse'></i>
                       </span><a href='mon_compte.php'>Votre Compte '{$_SESSION['identifiant']}'</a></li> 
                       <li><a href='deconnexion.php'>Deconnexion</a></li>
                       </li>
                       ");
            }
            else
            {
                echo "<li id='connexion_menu'><a href='connexion_page.php'><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>
                  <li id='inscription_menu'><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i><a href='inscrire_page.php'>S'inscrire</a></li>";

            }
            ?>
            <li><a href="gestion.php">Gestion</a></li>
</ul>
</nav>
