<?php
function freePlace()
    /*Renvoie une place disponible*/
{

    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $selection_sql = "SELECT MIN(`ienac15_`.Place.id_place) AS id_place FROM `ienac15_`.`Stationnement` 
                    RIGHT JOIN `ienac15_`.Place ON `ienac15_`.Stationnement.id_place = `ienac15_`.Place.id_pLace
                    WHERE Stationnement.id_place IS NULL"; //On fait un RIGHT JOIN pour élimnier les occurences présentes dans stationnement

    $selection_req = mysqli_query($db, $selection_sql) or die('Erreur SQL : ' . mysqli_error($db));
    mysqli_close($db);
    while ($data = mysqli_fetch_assoc($selection_req)) {
        return $data['id_place'];
    }


}


function newVehicule()
    /*Ajoute un client dans la table et renvoie sa plaque*/
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database


    $sql_client = "INSERT INTO `ienac15_`.`Vehicule` (`plaque`, `type_vehicule`)
        VALUES('{$_POST['plaque']}', '{$_POST['vehicule']}') ON DUPLICATE KEY UPDATE plaque = '{$_POST['plaque']}' ";
    $req = mysqli_query($db, $sql_client) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    mysqli_close($db);
    return $_POST['plaque'];
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

$client = newVehicule();
$place = freePlace();
stationnement($client, $place);

?>