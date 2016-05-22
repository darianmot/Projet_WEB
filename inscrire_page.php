<!DOCTYPE html>
<html>
<?php include("template/head.php") ?>
<?php include("template/menu.php")?>
<body>
<h1 id="sinscrire" >S'inscrire</h1>
<div id="bloc_inscrire">
    <form  method="post" id="inscription_form">
        <table>
            <tbody>
            <tr><td><b>Pseudonyme</b></td><td><input type="text" name="pseudonyme" id="nom_pseudonyme" value="" required></td></tr>
            <tr><td><b>Nom</b></td><td><input type="text" name="nom" id="nom_inscription" value="" required></td></tr>
            <tr><td><b>Prenom</b></td><td><input type="text" name="prenom" id="prenom_inscription" value="" required>
            <tr><td><b>Mail</b></td><td><input type="text" name="mail" id="mail_inscription" value="" required>
            <tr><td><b>Password</b></td><td><input type="password" name="password" id="password_inscription" value="" required>
                </td></tr>
            </tbody>
        </table>
        <button type = "button"  id="inscrire" > s'inscrire </button>
    </form>
</div>
<?php include("template/footer.php") ?>
</body>
</html>