<!DOCTYPE html>
<html>
<?php include("template/head.php") ?>
<body>
<?php include("template/menu.php")?>
<h1 id="connexion" >Connexion</h1>
<div id="bloc_connexion">
    <form  method="post" id="connexion_form">
    <table>
    <tbody>
    <tr><td><b>Identifiant</b></td><td><input type="text" name="identifiant" id="identifiant" value="" required></td></tr>
    <tr><td><b>Password</b></td><td><input type="password" name="password" id="password" value="" required>
            </td></tr>
    </tbody>
</table>
    <button type = "button"  id="identifier" > s'identifier </button>
</form>
</div>
<?php include("template/footer.php") ?>
</body>
</html>