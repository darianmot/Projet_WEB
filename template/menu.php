<?php
// demarrage de la session
session_start();
// creation des variables de session
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
</head>

<nav>
        <ul>
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
            <li><i class="fa fa-bar-chart" aria-hidden="true"></i> Parking direct</li>
            <li><a href="parking_view.php"><i class="fa fa-map" aria-hidden="true"></i>Plan des parkings</a></li>
            <li><a href="#map"><i class="fa fa-map-marker" aria-hidden="true"></i>Plan d'accès</a></li>
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>S'inscrire</li>
            <?php if ($_SESSION['identifiant']!='')
            {echo(" <li id=offres> Bienvenue {$_SESSION['identifiant']}
            <ul id=menu2>

                    <li id = 'voiture'><span class='fa-stack fa-lg'>
                        <i class='fa fa-user fa-stack-1x fa-inverse'></i>
                    </span>Votre Compte
                    <li><a href='deconnexion.php'>Deconnexion</a></li>
                </ul>
            </li>");}
            else
            {echo "<li><a href='connexion.php'><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>";}?>
</ul>
</nav>
<!---->
<!--<nav id="menu2">-->
<!--    <ul>-->
<!---->
<!--        <li id = "voiture"><span class="fa-stack fa-lg">-->
<!--                            <i class="fa fa-car fa-stack-1x fa-inverse"></i>-->
<!--                        </span>Voitures-->
<!--        </li>-->
<!---->
<!--        <li><span class="fa-stack fa-lg">-->
<!--                            <i class="fa fa-motorcycle fa-stack-1x fa-inverse"></i>-->
<!--                        </span>Moto-->
<!--        </li>-->
<!---->
<!--        <li><span class="fa-stack fa-lg">-->
<!--                            <i class="fa fa-taxi fa-stack-1x fa-inverse"></i>-->
<!--                        </span>Location-->
<!--        </li>-->
<!---->
<!--    </ul>-->
<!--</nav>-->
<!---->
<!---->
<!--<script src="js/jquery.js"></script>-->
<!--<script>-->
<!--    $(function() {-->
<!--        $('#offres').click(function(-->
<!--            $('menu2').show('slow');))-->
<!--    });-->
<!--</script>-->