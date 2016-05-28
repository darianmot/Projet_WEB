<!DOCTYPE html>
<!--variables-->
<?php
$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$cvcurrent = basename ($path);
?>
<?php include("template/head.php"); ?>
<?php include("template/menu.php"); ?>

<html>

<body id="body_cv">

<nav class="cvnav" id="menu_navigation_cv">
    <ul>
        <li>
            <a id='cv_anas'href=#cv_anas >Anas</a>
        </li>
        <li>
            <a id='cv_atime' href=#cv_atime>Atime</a>
        </li>
        <li>
            <a id='cv_darian' href=#cv_darian>Darian</a>
        </li>
        <li>
            <a id="cv_simon" href="#cv_simon" >Simon</a>

        </li>
    </ul>
</nav>



<section class="cvcontainer">

    <div class="header">

        <div class="me">
            <div class="name" id="name_cv">
            </div>
            <div class="age" id="age_cv">
            </div>
        </div>

        <div class ="adress" id="adress_cv1">
        </div>

        <div class ="adress" id="adress_cv2">
        </div>

        <div class="contact" id="contact_cv1">
        </div>

        <div class="contact" id="contact_cv2">
        </div>

        <div class="picture" id="face_cv">
        </div>

    </div>

    <article class="presentation" id="presentation_cv">
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#cv_simon').click(function ()
        {

            document.getElementById('name_cv').innerHTML='Al DOURI--RAVOUX';
            document.getElementById('age_cv').innerHTML='20 ans';
            document.getElementById('adress_cv1').innerHTML='40 avenue Joseph Claussat ';
            document.getElementById('adress_cv2').innerHTML='63400 Chamalières ';
            document.getElementById('contact_cv1').innerHTML='XX XX XX XX XX ';
            document.getElementById('contact_cv2').innerHTML='azerty@gmail.com'
            document.getElementById('presentation_cv').innerHTML='Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse';
        });
    });
    $(document).ready(function () {
        $('#cv_darian').click(function ()
        {
            document.getElementById('name_cv').innerHTML='MOTAMED';
            document.getElementById('age_cv').innerHTML='20 ans';
            document.getElementById('adress_cv1').innerHTML='Residence bledard';
            document.getElementById('adress_cv2').innerHTML='le ghetto'
            document.getElementById('contact_cv1').innerHTML='XX XX XX XX XX ';
            document.getElementById('contact_cv2').innerHTML='escort_girl@boulogne.com'
            document.getElementById('presentation_cv').innerHTML='Elève ingénieur en première année à l’Ecole Nationale de l’Anal Civile à Toulouse';        });

    });
    $(document).ready(function () {
        $('#cv_anas').click(function ()
        {

            document.getElementById('name_cv').innerHTML='DARWICH';
            document.getElementById('age_cv').innerHTML='22 ans';
            document.getElementById('adress_cv1').innerHTML='Residence BG';
            document.getElementById('adress_cv2').innerHTML='Residence BG';
            document.getElementById('contact_cv1').innerHTML="tout le monde veut mon num ";
            document.getElementById('contact_cv2').innerHTML="le_bg@bg_land.com";
            document.getElementById('presentation_cv').innerHTML="Elève ingénieur en première année à l’Ecole Nationale de l’Anal Civile à Toulouse";
        });
    });

    $(document).ready(function () {
        $('#cv_atime').click(function ()
        {

            document.getElementById('name_cv').innerHTML='RONDA';
            document.getElementById('age_cv').innerHTML='37 ans';
            document.getElementById('adress_cv1').innerHTML='Residence PUCEAU';
            document.getElementById('adress_cv2').innerHTML='31500'
            document.getElementById('contact_cv1').innerHTML='XX XX XX XX XX ';
            document.getElementById('contact_cv2').innerHTML="#_je_paye_des_p***@boulogne.com"
            document.getElementById('presentation_cv').innerHTML="j'aime les roumaines hmmmm!!!";
        });
    });
</script>


</body>
</html>