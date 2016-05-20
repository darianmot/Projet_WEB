<?php
// demarrage de la session
session_start();
// creation des variables de session
?>

<nav>
        <ul id="menu_p">
            <img class="img_nav" src="./media/images/logo2.png">
            <li>
                <a href='index.php'>
                    <span class="fa-stack fa-lg">
                    <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                </span>
                </a>
            </li>
            <li id="offres"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Nos offres
                <ul id="menu2">

                    <li id = "voiture"><span class="fa-stack fa-lg">
                        <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                    </span>Voitures
                    </li>

                    <li><span class="fa-stack fa-lg">
                        <i class="fa fa-motorcycle fa-stack-1x fa-inverse"></i>
                    </span>Moto
                    </li>

                    <li><span class="fa-stack fa-lg">
                        <i class="fa fa-taxi fa-stack-1x fa-inverse"></i>
                    </span>Location
                    </li>

                </ul>
            </li>
            <li><a href="parking_view.php"><i class="fa fa-bar-chart" aria-hidden="true"></i></i>Plan des parkings</a></li>
            <li><a href="#map"><i class="fa fa-map-marker" aria-hidden="true"></i>Plan d'accès</a></li>
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i><a href="inscrire_page.php">S'inscrire</a></li>
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
                echo "<li id='onglet_connexion'><a href='connexion_page.php'><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>";
            }
            ?>
            <li><a href="gestion.php">Gestion</a></li>
</ul>
</nav>
