<?php

$db = mysqli_connect('localhost', 'root', 'mysql'); //Conncetion
mysqli_select_db('ienac15_',$db); //Selection de la database

$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO `ienac15_`.`Client` (`plaque`, `type_vehicule`, `date_entree`, `reservation`, `zone_choisi`)
        VALUES({$_POST['plaque']}, '{$_POST['vehicule']}', '{$date}', NULL, {$_POST['zone']}) ";

$req = mysqli_query($db,$sql) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête
//// on fait une boucle qui va faire un tour pour chaque enregistrement
//while($data = mysqli_fetch_assoc($req))
//{
//    // on affiche les informations de l'enregistrement en cours
//    echo '<b>'.$data['nom'].' '.$data['prenom'].'</b> ('.$data['statut'].')';
//    echo ' <i>date de naissance : '.$data['date'].'</i><br>';
//}

// on ferme la connexion à mysql
echo  "succes...";
mysqli_close($db);
?>