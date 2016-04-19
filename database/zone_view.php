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

function placeTable($id_zone, $lg_table)
    /*Genere un tableau visualisant les places d'une zone*/
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_', $db); //Selection de la database

    $type_vehicule = "SELECT * FROM `ienac15_`.`TypeVehicule`";
    $req_type = mysqli_query($db, $type_vehicule) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    echo '<table cellspacing="30">';
    while ($type = mysqli_fetch_assoc($req_type)) {
        $i = 0; //Permettra de faire un tableau de places sur plusieurs lignes et non sur une seul ligne

        echo '<tr><td>' . $type['type'] . '</td>
              <td><table><tr>';

        $current_places = "SELECT * FROM `ienac15_`.`Place` WHERE Place.id_zone = '{$id_zone}' AND Place.type_vehicule = '{$type['type']}'";
        $req_places = mysqli_query($db, $current_places) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête
        while ($place = mysqli_fetch_assoc($req_places)) {
            if ($i % $lg_table == 0) //On crée un nouvelle ligne si la précendente est trop longue
            {
                echo '</tr><tr>';
            }
            $place_status = "SELECT EXISTS (
                              SELECT id_place FROM `ienac15_`.`Stationnement` WHERE etat IN ('occupee') AND id_place = {$place['id_place']}) AS status;";
            $req_status = mysqli_query($db, $place_status) or die('Erreur SQL : ' . mysqli_error($db));
            $status = mysqli_fetch_array($req_status);
            if ($status['status'] == 1) //Si la place n'est pas libre
            {
                $class = 'occupee';
            } else {
                $class = 'libre';
            }
            echo "<td id = {$place['id_place']} class = {$class}>{$place['id_place']} <td>";
            $i++;
        }
        echo '</tr></table></tr>';
    }
    echo '</table>';

}

if (isset($_POST['id_zone']) and isset($_POST['lg_table'])) {
    placeTable($_POST['id_zone'], $_POST['lg_table']);
} else {
    placeTable(1, 10);
}
?>