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
            <a id='cv_anas' href=#cv_anas >Anas</a>
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
        <div class="title_article" id="titre1"></div>
        <table class="cvtable">
            <tbody>
            <tr class="tr1"><td class="td1" id="year1"></td><td id="descript_year1"></td></tr>
            <tr class="tr1"><td class="td1" id="year2"></td><td id="descript_year2"></td></tr>
            <tr class="tr1"><td class="td1" id="year3"></td><td id="descript_year3"></td></tr>
            <tr class="tr1"><td class="td1" id="year4"></td><td id="descript_year4"></td></tr>
            </tbody>
        </table>
    </article>

    <article>
        <div class="title_article" id="titre2">
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

            document.getElementById('name_cv').innerHTML='Simon AL-DOURI--RAVOUX';
            document.getElementById('age_cv').innerHTML='20 ans';
            document.getElementById('adress_cv1').innerHTML='40 avenue Joseph Claussat ';
            document.getElementById('adress_cv2').innerHTML='63400 Chamalières ';
            document.getElementById('contact_cv1').innerHTML='XX XX XX XX XX ';
            document.getElementById('contact_cv2').innerHTML='simon@gmail.com';
            document.getElementById('presentation_cv').innerHTML='Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse';
            document.getElementById('titre1').innerHTML='ETUDES ET FORMATIONS';
            document.getElementById('year1').innerHTML='2015-2016';
            document.getElementById('year2').innerHTML='2014-2015';
            document.getElementById('year3').innerHTML='2013-2014';
            document.getElementById('year4').innerHTML='2012-2013';
            document.getElementById('descript_year1').innerHTML='Elève ingénieur à l’Ecole Nationale de l’Aviation Civile à Toulouse';
            document.getElementById('descript_year2').innerHTML='Classe préparatoire aux Grandes Ecoles, Maths Physique option Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand';
            document.getElementById('descript_year3').innerHTML='Classe préparatoire aux Grandes Ecoles, Maths Physique Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand';
            document.getElementById('descript_year4').innerHTML='Baccalauréat S section européenne anglais   Mention Très Bien et  félicitations du jury  Lycée Blaise Pascal à Clermont-Ferrand ';
            document.getElementById('titre2').innerHTML='EXPERIENCES PROFESSIONNELLES';
        });
    });
    $(document).ready(function () {
        $('#cv_darian').click(function ()
        {
            document.getElementById('name_cv').innerHTML='Darian MOTAMED';
            document.getElementById('age_cv').innerHTML='20 ans';
            document.getElementById('adress_cv1').innerHTML='7 avenue Edouar Belin, n°MB355,';
            document.getElementById('adress_cv2').innerHTML='31400 Toulouse';
            document.getElementById('contact_cv1').innerHTML='XX XX XX XX XX ';
            document.getElementById('contact_cv2').innerHTML='darian@gmail.com';
            document.getElementById('presentation_cv').innerHTML="Étudiant à l'École Nationale de l'Aviation Civile (ENAC)<br>Première année du cursus ingénieur IENAC</br>";
            document.getElementById('titre1').innerHTML='FORMATIONS';
            document.getElementById('year1').innerHTML="2015-Aujourd'hui";
            document.getElementById('year2').innerHTML='2013-2015';
            document.getElementById('year3').innerHTML='2010-2013';
            document.getElementById('descript_year1').innerHTML="École Nationale de l'Aviation Civile (ENAC)<br>Cursus ingénieur aéronautique IENAC</br>";
            document.getElementById('descript_year2').innerHTML="Lycée Marcelin Berthelot (94)<br>Classes préparatoires MPSI/MP*</br>";
            document.getElementById('descript_year3').innerHTML="Lycée Marcelin Berthelot (94)<br>Bac S mention Bien</br>";

        });

    });
    $(document).ready(function () {
        $('#cv_anas').click(function ()
        {

            document.getElementById('name_cv').innerHTML='Anas DARWICH';
            document.getElementById('age_cv').innerHTML='22 ans';
            document.getElementById('adress_cv1').innerHTML='Residence BG';
            document.getElementById('adress_cv2').innerHTML='Residence BG';
            document.getElementById('contact_cv1').innerHTML="tout le monde veut mon num ";
            document.getElementById('contact_cv2').innerHTML="le_bg@bg_land.com";
            document.getElementById('presentation_cv').innerHTML="Elève ingénieur en première année à l’Ecole Nationale de l’Anal Civile à Toulouse";
            document.getElementById('titre1').innerHTML='FORMATIONS';

        });
    });

    $(document).ready(function () {
        $('#cv_atime').click(function ()
        {

            document.getElementById('name_cv').innerHTML='Atime RONDA';
            document.getElementById('age_cv').innerHTML='37 ans';
            document.getElementById('adress_cv1').innerHTML="Chez ENAC<br>7 avenue Edouard Belin</br>";
            document.getElementById('adress_cv2').innerHTML='31055 TOULOUSE';
            document.getElementById('contact_cv1').innerHTML='XX XX XX XX XX ';
            document.getElementById('contact_cv2').innerHTML="atime.ronda@alumni.enac.fr";
            document.getElementById('presentation_cv').innerHTML="";
            document.getElementById('titre1').innerHTML='FORMATIONS';
            document.getElementById('year1').innerHTML="2015-Aujourd'hui";
            document.getElementById('year2').innerHTML='2013-2015';
            document.getElementById('year3').innerHTML='2013';
            document.getElementById('descript_year1').innerHTML='';
            document.getElementById('descript_year2').innerHTML='';
            document.getElementById('descript_year3').innerHTML='';
        });
    });
</script>


</body>
</html>