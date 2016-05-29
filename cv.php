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

        <img class="picture" id="face_cv"></img>

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
        <div class="title_article" id="titre2"></div>
        <table class="cvtable">
            <tbody>
            <tr class="tr1"><td class="td1" id="year2.1"></td><td id="descript_year2.1"></td></tr>
            <tr class="tr1"><td class="td1" id="year2.2"></td><td id="descript_year2.2"></td></tr>
            <tr class="tr1"><td class="td1" id="year2.3"></td><td id="descript_year2.3"></td></tr>
            <tr class="tr1"><td colspan="2" id="descript1"></td></tr>
            </tbody>
        </table>
    </article>

    <article>
        <div class="title_article" id="titre3"></div>
        <table class="cvtable">
            <tbody>
            <tr class="tr1"><td class="td1" id="comp1"></td><td id="descript_comp1"></td></tr>
            <tr class="tr1"><td class="td1" id="comp2"></td><td id="descript_comp2"></td></tr>
            <tr class="tr1"><td class="td1" id="comp3"></td><td id="descript_comp3"></td></tr>
            <tr class="tr1"><td colspan="2" id="comp4"></td><td id="descript_comp4"></td></tr>
            </tbody>
        </table>
    </article>

    <article>
        <div class="title_article" id="titre4"></div>
        <table class="cvtable">
            <tbody>
            <tr class="tr1"><td id="hobbies1"></td></tr>
            <tr class="tr1"><td id="hobbies2"></td></tr>
            <tr class="tr1"><td id="hobbies3"></td></tr>
            </tbody>
        </table>
    </article>
</section>

<script type="text/javascript">
    document.getElementById('name_cv').innerHTML='Anas DARWICH';
    document.getElementById('age_cv').innerHTML='22 ans';
    document.getElementById('adress_cv1').innerHTML='Chez ENAC, LB310';
    document.getElementById('adress_cv2').innerHTML='7 av. Edouard Belin<br>31055 Toulouse</br>';
    document.getElementById('contact_cv1').innerHTML="XX XX XX XX XX";
    document.getElementById('contact_cv2').innerHTML="anas@aliceadsl.fr";
    document.getElementById('face_cv').src="./media/images/";
    document.getElementById('presentation_cv').innerHTML="";
    document.getElementById('titre1').innerHTML='FORMATIONS';
    document.getElementById('year1').innerHTML="2015-2016";
    document.getElementById('year2').innerHTML='2012-2015';
    document.getElementById('year3').innerHTML='Juin 2012';
    document.getElementById('descript_year1').innerHTML="1er année Ingénieur<br>ENAC. Toulouse</br>";
    document.getElementById('descript_year2').innerHTML="Classe préparatoire aux grandes écoles MPSI-MP<br>Lycée Fénelon. Paris 6è</br>";
    document.getElementById('descript_year3').innerHTML="Baccalauréat scientifique mention bien<br>Lycée Gustave Eiffel. Cachan</br>";
    document.getElementById('descript_year4').innerHTML='';
    document.getElementById('titre2').innerHTML='STAGE';
    document.getElementById('year2.1').innerHTML="2009";
    document.getElementById('year2.2').innerHTML='';
    document.getElementById('year2.3').innerHTML='';
    document.getElementById('descript_year2.1').innerHTML=" Université PARIS 7<br>Découverte de l’organisation de l’université, des métiers d’enseignement et des métiers techniques liés à la gestion des matériels informatiques.</br>";
    document.getElementById('descript_year2.2').innerHTML="";
    document.getElementById('descript_year2.3').innerHTML="";
    document.getElementById('descript1').innerHTML="";
    document.getElementById('titre3').innerHTML='COMPETENCES';
    document.getElementById('comp1').innerHTML='Informatique : ';
    document.getElementById('comp2').innerHTML='Langues : ';
    document.getElementById('comp3').innerHTML='';
    document.getElementById('comp4').innerHTML='';
    document.getElementById('descript_comp1').innerHTML="Utilisation des logiciels de la suite office<br>Programmation en Python, php, jquery, sql</br>";
    document.getElementById('descript_comp2').innerHTML="Anglais niveau B2<br>(2 séjours en Angleterre d’une semaine et un séjour en Ecosse de 2 semaines)</br>Espagnol niveau B2";
    document.getElementById('descript_comp3').innerHTML='';
    document.getElementById('descript_comp4').innerHTML='';
    document.getElementById('titre4').innerHTML="CENTRES D’INTERET";
    document.getElementById('hobbies1').innerHTML="Sports pratiqués : Volley-ball, Basket-ball, Football, ski, planche à voile, catamaran";
    document.getElementById('hobbies2').innerHTML="Musique : pratique du violon, musique de chambre";
    document.getElementById('hobbies3').innerHTML="";
    $(document).ready(function () {
        $('#cv_simon').click(function ()
        {

            document.getElementById('name_cv').innerHTML='Simon AL-DOURI--RAVOUX';
            document.getElementById('age_cv').innerHTML='20 ans';
            document.getElementById('adress_cv1').innerHTML='40 avenue Joseph Claussat ';
            document.getElementById('adress_cv2').innerHTML='63400 Chamalières ';
            document.getElementById('contact_cv1').innerHTML='XX XX XX XX XX ';
            document.getElementById('contact_cv2').innerHTML='simon@gmail.com';
            document.getElementById('face_cv').src="./media/images/simon_pic.jpg";
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
            document.getElementById('year2.1').innerHTML='2015-2016';
            document.getElementById('year2.2').innerHTML='Eté 2014';
            document.getElementById('year2.3').innerHTML='Hiver 2010';
            document.getElementById('descript_year2.1').innerHTML="Contractuel administratif à la Bibliothèque-Documentation de la Direction des<br>Etudes et de la Recherche de l’Ecole Nationale de l'Aviation Civile – 25h/mois</br> Accueil et conseil du public, gestion et suivi des prêts";
            document.getElementById('descript_year2.2').innerHTML="Chef louveteaux et jeannettes (8-10 ans) aux Scouts de France<br>Encadrement de jeunes, organisation matérielle, financière et sanitaire, travail d’équipe</br>";
            document.getElementById('descript_year2.3').innerHTML="Stage de troisième à la SACER auprès d’un ingénieur des travaux publics";
            document.getElementById('descript1').innerHTML="Compétences apportées : rigueur, autonomie, organisation, initiative";
            document.getElementById('titre3').innerHTML='COMPETENCES';
            document.getElementById('comp1').innerHTML='Anglais : ';
            document.getElementById('comp2').innerHTML='Espagnol : ';
            document.getElementById('comp3').innerHTML='Informatique : ';
            document.getElementById('comp4').innerHTML='Premiers Secours Civiques 1';
            document.getElementById('descript_comp1').innerHTML=' First Certificate of Cambridge niveau B2, préparation du TOEFL';
            document.getElementById('descript_comp2').innerHTML='préparation du DELE';
            document.getElementById('descript_comp3').innerHTML='Bureautique, programmation en Python, html, php, javascript, css, Linux, OpenVSP, XFoil ';
            document.getElementById('descript_comp4').innerHTML='';
            document.getElementById('titre4').innerHTML="CENTRES D'INTERET";
            document.getElementById('hobbies1').innerHTML="Lecture, cinéma, musique, actualité, sciences ";
            document.getElementById('hobbies2').innerHTML="Sport : judo (ceinture marron), boxe chinoise, snowboard";
            document.getElementById('hobbies3').innerHTML="Aéronautique et automobile ";




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
            document.getElementById('face_cv').src="./media/images/darian_pic.jpg";
            document.getElementById('presentation_cv').innerHTML="Étudiant à l'École Nationale de l'Aviation Civile (ENAC)<br>Première année du cursus ingénieur IENAC</br>";
            document.getElementById('titre1').innerHTML='FORMATIONS';
            document.getElementById('year1').innerHTML="2015-Aujourd'hui";
            document.getElementById('year2').innerHTML='2013-2015';
            document.getElementById('year3').innerHTML='2010-2013';
            document.getElementById('descript_year1').innerHTML="École Nationale de l'Aviation Civile (ENAC)<br>Cursus ingénieur aéronautique IENAC</br>";
            document.getElementById('descript_year2').innerHTML="Lycée Marcelin Berthelot (94)<br>Classes préparatoires MPSI/MP*</br>";
            document.getElementById('descript_year3').innerHTML="Lycée Marcelin Berthelot (94)<br>Bac S mention Bien</br>";
            document.getElementById('descript_year4').innerHTML='';
            document.getElementById('titre2').innerHTML='FORMATION';
            document.getElementById('year2.1').innerHTML="2015-Aujourd'hui";
            document.getElementById('year2.2').innerHTML='2013-2015';
            document.getElementById('year2.3').innerHTML='2010-2013';
            document.getElementById('descript_year2.1').innerHTML="École Nationale de l'Aviation Civile (ENAC)<br>Cursus ingénieur aéronautique IENAC </br>";
            document.getElementById('descript_year2.2').innerHTML="Lycée Marcelin Berthelot (94)<br>Classes préparatoires MPSI/MP*</br>";
            document.getElementById('descript_year2.3').innerHTML="Lycée Marcelin Berthelot (94)<br>Bac S mention Bien</br>";
            document.getElementById('descript1').innerHTML="";
            document.getElementById('titre3').innerHTML='COMPETENCES';
            document.getElementById('comp1').innerHTML='Linguistiques : ';
            document.getElementById('comp2').innerHTML='Informatiques : ';
            document.getElementById('comp3').innerHTML='';
            document.getElementById('comp4').innerHTML='';
            document.getElementById('descript_comp1').innerHTML="Maîtrise de l'anglais (usage professionnel)";
            document.getElementById('descript_comp2').innerHTML="Utilisation des systèmes UNIX et Windows<br>Connaissance des langages C, Python, PHP</br>Maîtrise de Word, Excel, PowerPoint";
            document.getElementById('descript_comp3').innerHTML='';
            document.getElementById('descript_comp4').innerHTML='';
            document.getElementById('titre4').innerHTML="ACTIVITES";
            document.getElementById('hobbies1').innerHTML="Membre du Club Robotique de l'ENAC : →Conception en équipe d'un robot suivant un cahier des charges";
            document.getElementById('hobbies2').innerHTML=" Pratique du Judo (1ere Dan)";
            document.getElementById('hobbies3').innerHTML="";


        });

    });
    $(document).ready(function () {
        $('#cv_anas').click(function ()
        {

            document.getElementById('name_cv').innerHTML='Anas DARWICH';
            document.getElementById('age_cv').innerHTML='22 ans';
            document.getElementById('adress_cv1').innerHTML='Chez ENAC, LB310';
            document.getElementById('adress_cv2').innerHTML='7 av. Edouard Belin<br>31055 Toulouse</br>';
            document.getElementById('contact_cv1').innerHTML="XX XX XX XX XX";
            document.getElementById('contact_cv2').innerHTML="anas@aliceadsl.fr";
            document.getElementById('face_cv').src="./media/images/";
            document.getElementById('presentation_cv').innerHTML="";
            document.getElementById('titre1').innerHTML='FORMATIONS';
            document.getElementById('year1').innerHTML="2015-2016";
            document.getElementById('year2').innerHTML='2012-2015';
            document.getElementById('year3').innerHTML='Juin 2012';
            document.getElementById('descript_year1').innerHTML="1er année Ingénieur<br>ENAC. Toulouse</br>";
            document.getElementById('descript_year2').innerHTML="Classe préparatoire aux grandes écoles MPSI-MP<br>Lycée Fénelon. Paris 6è</br>";
            document.getElementById('descript_year3').innerHTML="Baccalauréat scientifique mention bien<br>Lycée Gustave Eiffel. Cachan</br>";
            document.getElementById('descript_year4').innerHTML='';
            document.getElementById('titre2').innerHTML='STAGE';
            document.getElementById('year2.1').innerHTML="2009";
            document.getElementById('year2.2').innerHTML='';
            document.getElementById('year2.3').innerHTML='';
            document.getElementById('descript_year2.1').innerHTML=" Université PARIS 7<br>Découverte de l’organisation de l’université, des métiers d’enseignement et des métiers techniques liés à la gestion des matériels informatiques.</br>";
            document.getElementById('descript_year2.2').innerHTML="";
            document.getElementById('descript_year2.3').innerHTML="";
            document.getElementById('descript1').innerHTML="";
            document.getElementById('titre3').innerHTML='COMPETENCES';
            document.getElementById('comp1').innerHTML='Informatique : ';
            document.getElementById('comp2').innerHTML='Langues : ';
            document.getElementById('comp3').innerHTML='';
            document.getElementById('comp4').innerHTML='';
            document.getElementById('descript_comp1').innerHTML="Utilisation des logiciels de la suite office<br>Programmation en Python, php, jquery, sql</br>";
            document.getElementById('descript_comp2').innerHTML="Anglais niveau B2<br>(2 séjours en Angleterre d’une semaine et un séjour en Ecosse de 2 semaines)</br>Espagnol niveau B2";
            document.getElementById('descript_comp3').innerHTML='';
            document.getElementById('descript_comp4').innerHTML='';
            document.getElementById('titre4').innerHTML="CENTRES D’INTERET";
            document.getElementById('hobbies1').innerHTML="Sports pratiqués : Volley-ball, Basket-ball, Football, ski, planche à voile, catamaran";
            document.getElementById('hobbies2').innerHTML="Musique : pratique du violon, musique de chambre";
            document.getElementById('hobbies3').innerHTML="";

        });
    });

    $(document).ready(function () {
        $('#cv_atime').click(function ()
        {

            document.getElementById('name_cv').innerHTML='Atime RONDA';
            document.getElementById('age_cv').innerHTML='';
            document.getElementById('adress_cv1').innerHTML="Chez ENAC<br>7 avenue Edouard Belin</br>";
            document.getElementById('adress_cv2').innerHTML='31055 TOULOUSE';
            document.getElementById('contact_cv1').innerHTML='XX XX XX XX XX ';
            document.getElementById('contact_cv2').innerHTML="atime.ronda@alumni.enac.fr";
            document.getElementById('face_cv').src="./media/images/.jpg";
            document.getElementById('presentation_cv').innerHTML="";
            document.getElementById('titre1').innerHTML='Formation';
            document.getElementById('year1').innerHTML="2015-Aujourd'hui";
            document.getElementById('year2').innerHTML='2013-2015';
            document.getElementById('year3').innerHTML='2010-2013';
            document.getElementById('descript_year1').innerHTML="Elève ingénieur IENAC <br>Ecole Nationale de l’Aviation Civile - Toulouse</br>";
            document.getElementById('descript_year2').innerHTML="Classe préparatoire aux Grandes Ecoles MPSI - MP*<br>Lycée Champollion - Grenoble</br>";
            document.getElementById('descript_year3').innerHTML="Baccalauréat scientifique mention Très Bien<br>Lycée Champollion - Grenoble</br>";
            document.getElementById('descript_year4').innerHTML='';
            document.getElementById('titre2').innerHTML='Expériences Professionnelles';
            document.getElementById('year2.1').innerHTML='2012';
            document.getElementById('year2.2').innerHTML='2010';
            document.getElementById('year2.3').innerHTML='';
            document.getElementById('descript_year2.1').innerHTML="1er violon chef de pupitre <br>Orchestre « La Petite Philharmonie »</br>Réalisation d’une série de concerts à Grenoble et Bourgoin-Jallieu";
            document.getElementById('descript_year2.2').innerHTML="Stage en cabinet dentaire <br>Cabinet dentaire Gallix - Grenoble</br>Observation du milieu médical. Assistance ponctuelle au médecin et à l’entretien des locaux et du matériel";
            document.getElementById('descript_year2.3').innerHTML="";
            document.getElementById('descript1').innerHTML="";
            document.getElementById('titre3').innerHTML='Compétences';
            document.getElementById('comp1').innerHTML='';
            document.getElementById('comp2').innerHTML='';
            document.getElementById('comp3').innerHTML='';
            document.getElementById('comp4').innerHTML='';
            document.getElementById('descript_comp1').innerHTML="Utilisation de la suite Office (Word, Excel, Powerpoint…)";
            document.getElementById('descript_comp2').innerHTML="Programmation en Python, Caml, SQL, Shell, HTML, PHP, jQuery";
            document.getElementById('descript_comp3').innerHTML='Utilisation de SolidWorks<br>Langues étrangères parlées: Anglais bon niveau écrit et parlé, espagnol (débutant)</br>';
            document.getElementById('descript_comp4').innerHTML='';
            document.getElementById('titre4').innerHTML="Activités";
            document.getElementById('hobbies1').innerHTML="Sports pratiqués: Volleyball, Badminton, Tennis";
            document.getElementById('hobbies2').innerHTML="Organisation au meeting aérien Airexpo: gestion des navettes de transport visiteurs";
            document.getElementById('hobbies3').innerHTML="Club robotique: participation à la coupe de France de robotique";

        });
    });
</script>


</body>
</html>