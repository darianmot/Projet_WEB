<?php
function listTypeEmplacement()
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_',$db); //Selection de la database
    
    $sql = "SELECT * FROM `ienac15_`.`TypeEmplacement`";
    
    $req = mysqli_query($db, $sql) or die('Erreur SQL : ' . mysqli_error($db)); // Envoie de la requête

    mysqli_close($db);
    echo '<select name="type">';
    while($data = mysqli_fetch_assoc($req))
    {
        echo '<option>'.$data['type'].'</option>';
    }
    echo '</select>';

}

function newEmplacement()
{
    $db = mysqli_connect('localhost', 'root', 'mysql'); //Connection
    mysqli_select_db('ienac15_',$db); //Selection de la database

    $sql = "INSERT INTO `ienac15_`.`Emplacement` (`id_emplacement`, `id_zone`, `type_emplacement`, `occupe`) VALUES (NULL, {$_POST['zone']}, '{$_POST['type']}', NULL);";

    $req = mysqli_query($db,$sql) or die('Erreur SQL : ' . mysqli_error($db));

    mysqli_close($db);
}
if (isset($_POST['nombre'])) //Si la variable nombre a été renseignée
{
    for ($i = 1; $i <= $_POST['nombre']; $i++)
    {
        newEmplacement();
    }
    echo "success";
}

?>