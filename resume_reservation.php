<!DOCTYPE html>

<html>
<header>
<?php include("template/head.php");?>
</header>
<body>
<?php include("template/menu.php");?>


<!-- Début résumé -->

<h2>Votre réservation</h2>

<?php

$entry_date = $_POST['entry_date'];
$exit_date = $_POST['exit_date'];
$vehicule = $_POST['selection_vehicule'];
$prix = $_POST['price_input'];
echo "Véhicule: $vehicule ";
echo "</br>Entrée le ";
echo "$entry_date " ;
echo "</br>Sortie le ";
echo "$exit_date ";

echo "</br> Prix: $prix €"
?>

</br>

</div>

<br/> <br/>
<button type="submit" class="button_reserv">Confirmer la réservation</button>

<?php include ("template/footer.php");?>
</body>
</html>
    