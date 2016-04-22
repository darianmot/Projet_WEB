<?php
function place_view($id_place)
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $sql = "SELECT * FROM ienac15_.Stationnement RIGHT JOIN ienac15_.Place
            ON Stationnement.id_place = Place.id_place WHERE Place.id_place='{$id_place}'";
    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db));

    echo '<table>';
    while ($data = mysqli_fetch_assoc($req)) {
        /*Id de la place*/
        echo '<tr><td>ID Place : </td><td>' . $data['id_place'] . '</td>';

        /*Statue de la place*/
        echo '<tr><td>Status : </td><td>';
        if ($data['etat'] == NULL) {
            echo 'libre';
        } else {
            echo $data['etat'];
        }
        echo '</td></tr>';

        /*Véhicule eventuel sur la plaque*/
        echo '<tr><td>Vehicule :</td><td>' . $data['plaque'] . '</td></tr>';


    }
    echo '</table>';

}

place_view($_POST['id_place']);