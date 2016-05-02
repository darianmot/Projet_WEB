<!DOCTYPE html>
<html>
<?php include("template/head.php") ?>
<body>
<?php include("template/menu.php")?>
<h1>Connexion</h1>

<form action="compte.php" method="post">
    <table>
    <tbody>
    <tr><td><b>Identifiant</b></td><td><input type="text" name="identifiant" value=""></td></tr>
    <tr><td><b>Password</b></td><td><input type="password" name="password" value="">
            </td></tr>
    </tbody>
</table>
    <input type = "submit" value = "S'identifier">
</form>

<?php include("template/footer.php") ?>
</body>
</html>