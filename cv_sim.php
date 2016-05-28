<!DOCTYPE html>
    
<?php include("template/menu.php"); ?>

<?php
//$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//$cvcurrent = basename ($path);

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



            <section class="cvcontainer">

                <div class="header">

                    <div class="me">
                        <div class="name">
                        </div>
                        <div class="age" id="age">
                        </div>
                    </div>

                    <div class ="adress">
                    </div>

                    <div class="contact">
                    </div>

                    <div class="picture">
                    </div>

                </div>

                <article class="presentation">
                </article>

                <article>
                    <div class="title_article">
                        ETUDES ET FORMATIONS
                    </div>
                    <table class="cvtable">
                        <tbody>
                        <tr class="tr1"><td class="td1">2015-2016</td><td>Elève ingénieur à l’Ecole Nationale de l’Aviation Civile à Toulouse</td></tr>
                        <tr class="tr1"><td class="td1">2014-2015</td><td>Classe préparatoire aux Grandes Ecoles, Maths Physique option Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand</td></tr>
                        <tr class="tr1"><td class="td1">2013-2014</td><td>Classe préparatoire aux Grandes Ecoles, Maths Physique Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand</td></tr>
                        <tr class="tr1"><td class="td1">2012-2013</td><td>Baccalauréat S section européenne anglais   Mention Très Bien et  félicitations du jury  Lycée Blaise Pascal à Clermont-Ferrand </td></tr>
                        </tbody>
                    </table>
                </article>

                <article>
                    <div class="title_article">
                        EXPERIENCES PROFESSIONNELLES
                    </div>
                    <table class="cvtable">
                        <tbody>
                        <tr class="tr1"><td class="td1">2015-2016</td><td>Contractuel administratif à la Bibliothèque-Documentation de la Direction des
                                <br>Etudes et de la Recherche de l’Ecole Nationale de l'Aviation Civile – 25h/mois</br>
                                Accueil et conseil du public, gestion et suivi des prêts</td></tr>
                        <tr class="tr1"><td class="td1">Eté 2014</td><td>Chef louveteaux et jeannettes (8-10 ans) aux Scouts de France
                                <br>Encadrement de jeunes, organisation matérielle, financière et sanitaire, travail d’équipe</br></td></tr>
                        <tr class="tr1"><td class="td1">Hiver 2010</td><td>Stage de troisième à la SACER auprès d’un ingénieur des travaux publics</td></tr>
                        <tr class="tr1"><td colspan="2">Compétences apportées : rigueur, autonomie, organisation, initiative</td></tr>
                        </tbody>
                    </table>
                </article>

                <article>
                    <div class="title_article">
                        COMPETENCES
                    </div>
                    <table class="cvtable">
                        <tbody>
                        <tr class="tr1"><td class="td1">Anglais : </td><td> First Certificate of Cambridge niveau B2, préparation du TOEFL</td></tr>
                        <tr class="tr1"><td class="td1">Espagnol : </td><td>préparation du DELE</td></tr>
                        <tr class="tr1"><td class="td1">Informatique : </td><td>Bureautique, programmation en Python, html, php, java, Linux, OpenVSP, XFoil </td></tr>
                        <tr class="tr1"><td colspan="2">Premiers Secours Civiques 1</td></tr>
                        </tbody>
                    </table>
                </article>

                <article>
                    <div class="title_article">
                        CENTRES D'INTERET
                    </div>
                    <table class="cvtable">
                        <tbody>
                        <tr class="tr1"><td>Lecture, cinéma, musique, actualité, sciences </td></tr>
                        <tr class="tr1"><td>Sport : judo (ceinture marron), boxe chinoise, snowboard</td></tr>
                        <tr class="tr1"><td>Aéronautique et automobile </td></tr>
                        </tbody>
                    </table>
                </article>
            </section>
        </ul>
    </nav>



</body>
</html>



var name='<?php $name="RAVOUX "; ?>';
var age='<?php $age="20 ans"; ?>';
var adressfirst = '<?php $adress1="40 avenue Joseph Claussat"; ?>';
var adresssecond= '<?php $adress2="63400 Chamalières"; ?>';
var phone= '<?php $phone="XX XX XX XX XX"; ?>';
var mail='<?php $mail="azerty@gmail.com"; ?>';
var face='<?php $picture='./media/images/lion.jpg'; ?>';
var presentation='<?php $presentation="Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse"; ?>';
var studies='<?php $studies="Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse"; ?>';

