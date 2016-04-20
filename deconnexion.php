<?php include("template/menu.php"); ?>
<?php
session_destroy();
header('location:http://localhost/Projet_WEB/index.php');//on reinitialise les variables locales
?>

