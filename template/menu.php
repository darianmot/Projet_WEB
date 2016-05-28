<?php
// demarrage de la session
session_start();
// creation des variables de session
?>
<?php $nav_en_cours=""; ?>
<?php
$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$current = basename ($path);
?>

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
            <li><a class="<?php if ($current == 'tarifs.php'){ echo 'current';} else{ echo'no_current';}?>" href="tarifs.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Tarifs</a></li>
            <li><a class="<?php if ($current == 'parking_view.php'){ echo 'current';} else{ echo'no_current';}?>" href="parking_view.php"><i class="fa fa-map" aria-hidden="true"></i>Plan des parkings</a></li>
            <li><a class="<?php if ($current == 'access.php'){ echo 'current';} else{ echo'no_current';}?>" href='access.php'><i class="fa fa-map-marker" aria-hidden="true"></i>Plan d'accès</a></li>
            <?php
            if (isset($_SESSION['identifiant']))
            {

                if ($_SESSION['type']=='admin')

                {
                    echo("<li id='mon_compte_menu'> <li id = 'image_compte'>
                       <span class='fa-stack fa-lg'>
                       <i class='fa fa-user fa-stack-1x fa-inverse'></i>
                       </span><a href='mon_compte.php'>Votre Compte '{$_SESSION['identifiant']}'</a></li> 
                       <li><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i><a href='deconnexion.php'>Deconnexion</a></li>
                       <li><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i><a href='gestion.php'>Gestion</a></li>
                       ");

                }
                else

                {

                    echo("<li id='mon_compte_menu'> <li id = 'image_compte'>
                       <span class='fa-stack fa-lg'>
                       <i class='fa fa-user fa-stack-1x fa-inverse'></i>
                       </span><a href='mon_compte.php'>Votre Compte '{$_SESSION['identifiant']}'</a></li> 
                       <li><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i><a href='deconnexion.php'>Deconnexion</a></li>
                       
                       ");

                }

            }

            else
            {
                echo "<li id='connexion_menu'><a href='connexion_page.php'><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a></li>
                  <li id='inscription_menu'><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i><a href='inscrire_page.php'>S'inscrire</a></li>";

            }
            ?>
            <li><a class="<?php if ($current == 'cv.php'){ echo 'current';} else{ echo'no_current';}?>" href="cv.php"><i class="fa fa-users" aria-hidden="true"></i>Nos CV</a></li>
        </ul>
</nav>
