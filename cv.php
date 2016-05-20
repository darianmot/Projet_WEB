<!DOCTYPE html>
<!--variables-->
<?php $name="Simon AL-DOURI--RAVOUX "; ?>
<?php $age="20 ans"; ?>
<?php $adress1="40 avenue Joseph Claussat"; ?>
<?php $adress2="63400 Chamalières"; ?>
<?php $phone="XX XX XX XX XX"; ?>
<?php $mail="azerty@gmail.com"; ?>
<?php $picture='./media/images/logo2.png'; ?>
<?php $presentation="Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse"; ?>
<?php $studies="Elève ingénieur en première année à l’Ecole Nationale de l’Aviation Civile à Toulouse"; ?>

<?php include("template/head.php"); ?>
<!-- header -->
<div class="titre">
    <img src="./media/images/logo2.png">
</div>
<?php include("template/menu.php"); ?>

<html>
<body>

<section class="cvcontainer">

    <div class="header">

        <div class="me">
            <div class="name">
                <?php echo $name ?>
            </div>
            <div class="age">
                <?php echo $age ?>
            </div>
        </div>

        <div class ="adress">
                <?php echo $adress1 ?><br><?php echo $adress2 ?></br>
        </div>

        <div class="contact">
                <?php echo $phone ?><br><?php echo $mail ?></br>
        </div>

        <div class="picture">
            <img src=<?php echo $picture ?>>
        </div>

    </div>

    <article class="presentation">
        <?php echo $presentation ?>
    </article>

    <article class="studies">
        <div class="title_article">
            ETUDES ET FORMATIONS
        </div>
        <table>
            <tbody>
                <tr><td>2015-2016</td><td>Elève ingénieur à l’Ecole Nationale de l’Aviation Civile à Toulouse</td></tr>
                <tr><td>2014-2015</td><td>Classe préparatoire aux Grandes Ecoles, Maths Physique option Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand</td></tr>
                <tr><td>2013-2014</td><td>Classe préparatoire aux Grandes Ecoles, Maths Physique Sciences de l’Ingénieur Lycée Blaise Pascal à Clermont-Ferrand</td></tr>
                <tr><td>2012-2013</td><td>Baccalauréat S section européenne anglais   Mention Très Bien et  félicitations du jury  Lycée Blaise Pascal à Clermont-Ferrand </td></tr>
            </tbody>
        </table>
    </article>

    <article class="jobs">
        <div class="title_article">
            EXPERIENCES PROFESSIONNELLES
        </div>
        <table>
            <tbody>
            <tr><td>2015-2016</td><td>Contractuel administratif à la Bibliothèque-Documentation de la Direction des
                    <br>Etudes et de la Recherche de l’Ecole Nationale de l'Aviation Civile – 25h/mois</br>
                    <br>Accueil et conseil du public, gestion et suivi des prêts</br>
                    <br>Autonomie, responsabilité, communication</br></td></tr>
            <tr><td>Eté 2014</td><td>Chef louveteaux et jeannettes (8-10 ans) aux Scouts de France
                                <br>Encadrement de jeunes, organisation matérielle, financière et sanitaire, travail d’équipe</br></td></tr>
            <tr><td>Hiver 2010</td><td>Stage de troisième à la SACER auprès d’un ingénieur des travaux publics</td></tr>
            <tr><td>Compétences apportées : rigueur, autonomie, organisation, initiative</td></tr>
            </tbody>
        </table>
    </article>

    <article class="competences">
        <div class="title_article">
            COMPETENCES
        </div>
        <table>
            <tbody>
            <tr><td>Anglais : </td><td> First Certificate of Cambridge niveau B2, préparation du TOEFL</td></tr>
            <tr><td>Espagnol : </td><td>préparation du DELE</td></tr>
            <tr><td>Informatique : </td><td>Bureautique, programmation en Python, html, php, java, Linux, OpenVSP, XFoil </td></tr>
            <tr><td>Premiers Secours Civiques 1</td></tr>
            </tbody>
        </table>
    </article>

    <article class="hobbies">
        <div class="title_article">
            CENTRES D'INTERET
        </div>
        <table>
            <tbody>
            <tr><td>Lecture, cinéma, musique, actualité, sciences </td></tr>
            <tr><td>Sport : judo (ceinture marron), boxe chinoise, snowboard</td></tr>
            <tr><td>Aéronautique et automobile </td></tr>
            </tbody>
        </table>
    </article>
</section>

</body>
</html>