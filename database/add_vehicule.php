<?php
function freePlace($type)
    /*Renvoie une place disponible*/
{

    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    /*On fait un 'RIGHT JOIN' pour selectionner eventuellement des places qui n'ont pas encore servi pour stationner*/
    $selection_sql = "SELECT MIN(`ienac15_`.Place.id_place) AS id_place FROM `ienac15_`.`Stationnement` 
                    RIGHT JOIN `ienac15_`.Place ON `ienac15_`.Stationnement.id_place = `ienac15_`.Place.id_pLace
                    WHERE ((Stationnement.etat NOT IN ('occupee') or Stationnement.id_place IS NULL) AND Place.type_vehicule = '$type');";

    $selection_req = mysqli_query($db, $selection_sql) or die('Erreur SQL : ' . mysqli_error($db));
    mysqli_close($db);
    while ($data = mysqli_fetch_assoc($selection_req)) {
        return $data['id_place'];
    }


}


function newVehicule($plaque, $type_vehicule)
    /*Ajoute un vehicule dans la table*/
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database


    $sql_client = "INSERT INTO `ienac15_`.`Vehicule` (`plaque`, `type_vehicule`)
        VALUES('{$plaque}', '{$type_vehicule}') ON DUPLICATE KEY UPDATE plaque = '{$plaque}' ";
    $req = mysqli_query($db, $sql_client) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    mysqli_close($db);
}

function stationnement($plaque, $place)
{
    /*Met à jour la table Stationnement*/
    $db = mysqli_connect('localhost', 'root', 'mysql');
    mysqli_select_db('ienac15_', $db);

    $date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `ienac15_`.`Stationnement`(`id_stationnement`, `plaque`, `id_place`, `date_debut`, `date_fin`, `etat`, `id_facture`)
      VALUES (NULL, '{$plaque}', '{$place}', '{$date}', DATE_ADD('{$date}', INTERVAL 1 DAY), 'occupee', NULL); ";
    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db));

    mysqli_close($db);
}

if (isset($_POST['plaque']) and isset($_POST['type'])) {
    newVehicule($_POST['plaque'], $_POST['type']);
    $place = freePlace($_POST['type']);
    stationnement($_POST['plaque'], $place);
}


?>