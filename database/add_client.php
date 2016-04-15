<?php

$db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
mysqli_select_db('ienac15_',$db); //Selection de la database

$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO `ienac15_`.`Client` (`plaque`, `type_vehicule`, `date_entree`, `reservation`, `zone_choisie`)
        VALUES({$_POST['plaque']}, '{$_POST['vehicule']}', '{$date}', NULL, {$_POST['zone']}) ";

$req = mysqli_query($db,$sql) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

mysqli_close($db);

?>