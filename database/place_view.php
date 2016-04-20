<?php
function place_view($id_place)
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $sql = "SELECT * FROM ienac15_.Stationnement RIGHT JOIN ienac15_.Place
            ON Stationnement.id_place = Place.id_place WHERE Place.id_place='{$id_place}'";
    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db));

    while ($data = mysqli_fetch_assoc($req)) {
        echo $data['id_place'];
        echo $data['etat'];

    }

}

place_view($_POST['id_place']);