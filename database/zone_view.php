<?php
function clientList()
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $sql = "SELECT * from ienac15_.PlaceOccupee";

    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    mysqli_close($db);
    echo '<p>Client   /   Place attribuée   /   Place choisie</p>';
    while($data = mysqli_fetch_assoc($req))
    {
        echo '<p><i>' . $data['id_client'] . ' </i>/ ' . $data['id_attribution'] . ' /' . $data['id_choisi'] . '</p>';
    }
}

clientList()
?>