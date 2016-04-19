<?php
function listTypeEVehicule()
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_',$db); //Selection de la database

    $sql = "SELECT * FROM `ienac15_`.`TypeVehicule`";
    
    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    mysqli_close($db);
    echo '<select name="type" id="type">';
    while($data = mysqli_fetch_assoc($req))
    {
        echo '<option>'.$data['type'].'</option>';
    }
    echo '</select>';

}

function newplace($id_zone, $type_vehicule)
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_',$db); //Selection de la database

    $sql = "INSERT INTO `ienac15_`.`Place` (`id_place`, `id_zone`, `type_vehicule`) 
            VALUES (NULL, {$id_zone}, '{$type_vehicule}');";

    $req = mysqli_query($db,$sql) or die('Erreur SQL : ' . mysqli_error($db));

    mysqli_close($db);
}


if (isset($_POST['nombre'])) //Si la variable nombre a été renseignée
{
    for ($i = 1; $i <= $_POST['nombre']; $i++)
    {
        newplace($_POST['zone'], $_POST['type']);
    }
    echo "success";
}

?>