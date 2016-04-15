<?php
function clientList()
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $sql = "SELECT * from ienac15_.Client";

    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    mysqli_close($db);
    while($data = mysqli_fetch_assoc($req))
    {
        echo '<p><b>'.$data['plaque'].' </b> '.$data['type_vehicule'].' '.$data['date_entree'].' '.$data['reservation'].' '.$data['zone_choisie'].'</p>';
    }
}

clientList()
?>