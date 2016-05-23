<!DOCTYPE html>

<html>
<header>
<?php include("template/head.php");?>
</header>
<body>
<?php include("template/menu.php");?>


<!-- Début résumé -->

<h2>Etape 2: Complétez les informations requises</h2>

<h3>Votre réservation</h3>

<?php

$entry_date = $_POST['entry_date'];
$exit_date = $_POST['exit_date'];
$type = $_POST['type'];
$prix = $_POST['price_input'];
echo "<br/> Entrée le ";
echo "$entry_date " ;
echo "Sortie le ";
echo "$exit_date ";

echo "</br> Prix: $prix €"
?>

</br>

</div>



<br/> <br/>
<button type="submit" class="button_reserv">Continuer</button>

<?php include ("template/footer.php");?>
</body>
</html>
    