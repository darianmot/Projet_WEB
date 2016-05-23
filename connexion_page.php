<!DOCTYPE html>
<html>
<?php include("template/head.php") ?>

<?php include("template/menu.php")?>

<body>
<h1 id="connexion" >Connexion</h1>
<div id="bloc_connexion">
    <form  method="post" id="connexion_form">
        <table class="connexion_table">
            <tbody>
            <tr><td><b>Identifiant</b></td><td><input type="text" name="identifiant" id="identifiant" value="" required></td></tr>
            <tr><td><b>Password</b></td><td><input type="password" name="password" id="password" value="" required>
                </td></tr>
            </tbody>
        </table>
        <button type = "button"  id="identifier" class="connexion_button" > s'identifier </button>
    </form>
</div>
<?php include("template/footer.php") ?>
</body>
</html>