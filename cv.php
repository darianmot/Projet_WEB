<!DOCTYPE html>
    
<?php include("template/menu.php"); ?>

<?php
$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$cvcurrent = basename ($path);
$anas='anas'
?>

<html>
<header>
    <?php include("template/head.php"); ?>
</header>
<body id="body_cv">
    <nav class="cvnav" id="menu_navigation_cv">
        <ul>
            <li>
                <a href=#cv_anas >Anas</a>
            </li>
            <li>
                <a href=#cv_atime>Atime</a>
            </li>
            <li>
                <a href=#cv_darian>Darian</a>
            </li>
            <li>
                <a id="cv_simon2" href="#cv_simon" >Simon</a>
            </li>
            <div id="cv"></div>
            <script type='text/javascript'>
                $( '#cv_simon2' ).click(function() {
                    if ($('#cv').length==0)
                    {
                        var prix='<?php
                            $name="RAVOUX";
                            $age="20 ans";
                            $adress1="40 avenue Joseph Claussat";
                            $adress2="63400 Chamalières";
                            $phone="XX XX XX XX XX";
                            $mail="azerty@gmail.com";
                            $picture='./media/images/lion.jpg';
                            $presentation="Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse";
                            $studies="Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse";
                            echo ("<section><div><div>$name</div><div>$age</div></div><div>$adress1<br>$adress2</br></div><div>$phone<br>$mail</br></div><article >$presentation </article><article><div>ETUDES ET FORMATIONS</div><table><tbody><tr><td>2015-2016</td><td>Elève ingénieur à l’Ecole Nationale de l’Aviation Civile à Toulouse</td></tr><tr><td>2014-2015</td><td>Classe préparatoire aux Grandes Ecoles, Maths Physique option Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand</td></tr><tr><td>2013-2014</td><td>Classe préparatoire aux Grandes Ecoles, Maths Physique Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand</td></tr><tr><td>2012-2013</td><td>Baccalauréat S section européenne anglais   Mention Très Bien et  félicitations du jury  Lycée Blaise Pascal à Clermont-Ferrand </td></tr></tbody></table></article><article><div>EXPERIENCES PROFESSIONNELLES</div><table><tbody><tr><td>2015-2016</td><td>Contractuel administratif à la Bibliothèque-Documentation de la Direction des<br>Etudes et de la Recherche de l Ecole Nationale de l Aviation Civile – 25h/mois</br>Accueil et conseil du public, gestion et suivi des prêts</td></tr></tbody></table></article><article><div>COMPETENCES</div><table><tbody><tr><td>Anglais:</td><td> First Certificate of Cambridge niveau B2, préparation du TOEFL</td></tr><tr><td>Espagnol : </td><td>préparation du DELE</td></tr><tr><td>Informatique : </td><td>Bureautique, programmation en Python, html, php, java, Linux, OpenVSP, XFoil </td></tr><tr><td>Premiers Secours Civiques 1</td></tr></tbody></table></article><article><div>CENTRES D INTERET</div><table><tbody><tr><td>Lecture, cinéma, musique, actualité, sciences </td></tr><tr><td>Sport : judo (ceinture marron), boxe chinoise, snowboard</td></tr><tr><td>Aéronautique et automobile </td></tr></tbody></table></article></section>")?>';
                        $('#cv').append(prix);

                    }
                    else
                    {
                        var prix='<?php
                            $name="RAVOUX";
                            $age="20 ans";
                            $adress1="40 avenue Joseph Claussat";
                            $adress2="63400 Chamalières";
                            $phone="XX XX XX XX XX";
                            $mail="azerty@gmail.com";
                            $picture='./media/images/lion.jpg';
                            $presentation="Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse";
                            $studies="Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse";
                            echo ("<section><div><div>$name</div><div>$age</div></div><div>$adress1<br>$adress2</br></div><div>$phone<br>$mail</br></div><article >$presentation </article><article><div>ETUDES ET FORMATIONS</div><table><tbody><tr><td>2015-2016</td><td>Elève ingénieur à l’Ecole Nationale de l’Aviation Civile à Toulouse</td></tr><tr><td>2014-2015</td><td>Classe préparatoire aux Grandes Ecoles, Maths Physique option Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand</td></tr><tr><td>2013-2014</td><td>Classe préparatoire aux Grandes Ecoles, Maths Physique Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand</td></tr><tr><td>2012-2013</td><td>Baccalauréat S section européenne anglais   Mention Très Bien et  félicitations du jury  Lycée Blaise Pascal à Clermont-Ferrand </td></tr></tbody></table></article><article><div>EXPERIENCES PROFESSIONNELLES</div><table><tbody><tr><td>2015-2016</td><td>Contractuel administratif à la Bibliothèque-Documentation de la Direction des<br>Etudes et de la Recherche de l Ecole Nationale de l Aviation Civile – 25h/mois</br>Accueil et conseil du public, gestion et suivi des prêts</td></tr></tbody></table></article><article><div>COMPETENCES</div><table><tbody><tr><td>Anglais:</td><td> First Certificate of Cambridge niveau B2, préparation du TOEFL</td></tr><tr><td>Espagnol : </td><td>préparation du DELE</td></tr><tr><td>Informatique : </td><td>Bureautique, programmation en Python, html, php, java, Linux, OpenVSP, XFoil </td></tr><tr><td>Premiers Secours Civiques 1</td></tr></tbody></table></article><article><div>CENTRES D INTERET</div><table><tbody><tr><td>Lecture, cinéma, musique, actualité, sciences </td></tr><tr><td>Sport : judo (ceinture marron), boxe chinoise, snowboard</td></tr><tr><td>Aéronautique et automobile </td></tr></tbody></table></article></section>")?>';
                        $('#cv').replaceWith(prix);

                    }
                });
            </script>
        </ul>
    </nav>

<!--    <div id="cv">-->
<!--        --><?php //include("cv_groupe.php"); ?>
<!--    </div>-
<!--    <div id="cv_atime">-->
<!--        --><?php //include("cv_groupe.php"); ?>
<!--    </div>-->
<!--    <div id="cv_darian">-->
<!--        --><?php //include("cv_groupe.php"); ?>
<!--    </div>-->
<!--    <div id="cv_simon">-->
<!--        --><?php //include("cv_groupe.php"); ?>
<!--    </div>-->

</body>
</html>

<div id="contenu-un">
    <?php $name=""; ?>
</div>

<div id="contenu-deux" style="display:none">
    Wouhouuu ça marche !
</div>

