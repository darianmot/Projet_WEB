<?php
function clientList()
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $sql = "SELECT * FROM ienac15_.Stationnement ORDER BY plaque";

    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    mysqli_close($db);
    echo '<p>Vehicule   /   Place   /   Date debut / Date fin</p>';
    while($data = mysqli_fetch_assoc($req))
    {
        echo '<p><i>' . $data['plaque'] . ' </i>/ ' . $data['id_place'] . ' /' . $data['date_debut'] . ' / ' . $data['date_fin'] . '</p>';
    }
}

clientList()
?>