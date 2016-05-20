<?php
// demarrage de la session
session_start();
// creation des variables de session
?>
<?php $nav_en_cours=""; ?>

<nav>
        <ul>
            <li>
                <a href='index.php'>
                    <span class="fa-stack fa-lg">
                    <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                </span>
                </a>
            </li>
            <li <?php if ($nav_en_cours == 'cv.php') {echo ' id="en-cours"';} ?>><a href="cv.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Nos offres</a></li>
<!--                <ul id="menu2">-->
<!---->
<!--                    <li id = "voiture"><span class="fa-stack fa-lg">-->
<!--                        <i class="fa fa-car fa-stack-1x fa-inverse"></i>-->
<!--                    </span>Voitures-->
<!--                    </li>-->
<!---->
<!--                    <li><span class="fa-stack fa-lg">-->
<!--                        <i class="fa fa-motorcycle fa-stack-1x fa-inverse"></i>-->
<!--                    </span>Moto-->
<!--                    </li>-->
<!---->
<!--                    <li><span class="fa-stack fa-lg">-->
<!--                        <i class="fa fa-taxi fa-stack-1x fa-inverse"></i>-->
<!--                    </span>Location-->
<!--                    </li>-->
<!---->
<!--                </ul>-->
            </li>
            <li <?php if ($nav_en_cours == 'Plan des parkings') {echo ' id="en-cours"';} ?>><a href="parking_view.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>Plan des parkings</a></li>
            <li><a href='access.php'><i class="fa fa-map-marker" aria-hidden="true"></i>Plan d'accès</a></li>
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>S'inscrire</li>
            <?php
            if (isset($_SESSION['identifiant']))
            {
                echo(" <li id=offres> Bienvenue {$_SESSION['identifiant']}
                <ul id='menu2'>
    
                        <li id = 'voiture'><span class='fa-stack fa-lg'>
                            <i class='fa fa-user fa-stack-1x fa-inverse'></i>
                        </span>Votre Compte
                        <li><a href='deconnexion.php'>Deconnexion</a></li>
                    </ul>
                </li>");
            }
            else
            {
                echo "<li><a href='connexion.php'><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>";
            }
            ?>
            <li><a href="gestion.php">Gestion</a></li>
</ul>
</nav>
