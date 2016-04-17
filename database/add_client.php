<?php
function freePlace()
    /*Renvoie une place disponible*/
{

    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $selection_sql = "SELECT MIN(id_emplacement) FROM `ienac15_`.`Emplacement` WHERE occupe IS NULL";

    $selection_req = mysqli_query($db, $selection_sql) or die('Erreur SQL : ' . mysqli_error($db));
    while ($data = mysqli_fetch_assoc($selection_req)) {
        $update_sql = "UPDATE `ienac15_`.`Emplacement` SET occupe= 'False' WHERE id_emplacement ='{$data['MIN(id_emplacement)']}' ";
        $update_req = mysqli_query($db, $update_sql) or die('Erreur SQL : ' . mysqli_error($db));
        mysqli_close($db);
        return $data['MIN(id_emplacement)'];
    }


}


function newClient()
    /*Ajoute un client dans la table et renvoie sa plaque*/
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $date = date("Y-m-d H:i:s");

    $sql_client = "INSERT INTO `ienac15_`.`Client` (`plaque`, `type_vehicule`, `date_entree`, `reservation`, `zone_choisie`)
        VALUES('{$_POST['plaque']}', '{$_POST['vehicule']}', '{$date}', NULL, {$_POST['zone']}) ";
    $req = mysqli_query($db, $sql_client) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    mysqli_close($db);
    return $_POST['plaque'];
}

function attribution($plaque, $emplacement)
{
    /*Met a joue la table PlaceOccupee*/
    $db = mysqli_connect('localhost', 'root', 'mysql');
    mysqli_select_db('ienac15_', $db);

    $sql = "INSERT INTO `ienac15_`.`PlaceOccupee` VALUES('{$plaque}', '{$emplacement}', '{$emplacement}') ";
    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db));
    mysqli_close($db);
}

$client = newClient();
$place = freePlace();
attribution($client, $place);

//function newClient2()
//{
//    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
//    mysqli_select_db('ienac15_', $db); //Selection de la database
//
//    $selection_sql = "SELECT MIN(id_emplacement) FROM `ienac15_`.`Emplacement` WHERE occupe IS NULL";
//    $selection_req = mysqli_query($db, $selection_sql) or die('Erreur SQL : ' . mysqli_error($db));
//
//    while($data = mysqli_fetch_assoc($selection_req))
//    {
//        $update_sql = "UPDATE `ienac15_`.`Emplacement` SET occupe= 'False' WHERE id_emplacement ='{$data['MIN(id_emplacement)']}' ";
//        $update_req = mysqli_query($db, $update_sql) or die('Erreur SQL : ' . mysqli_error($db));
//
//        $emplacement = $data['MIN(id_emplacement)'];
//    }
//
//    $date = date("Y-m-d H:i:s");
//    $sql_client = "INSERT INTO `ienac15_`.`Client` (`plaque`, `type_vehicule`, `date_entree`, `reservation`, `zone_choisie`)
//        VALUES('{$_POST['plaque']}', '{$_POST['vehicule']}', '{$date}', NULL, {$_POST['zone']}) ";
//    $req = mysqli_query($db, $sql_client) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête
//    $plaque = $_POST['plaque'];
//
//
//    $sql = "INSERT INTO `ienac15_`.`PlaceOccupee` VALUES('{$plaque}', '{$emplacement}', '{$emplacement}') ";
//    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db));
//    mysqli_close($db);
//}
//newClient2();
?>