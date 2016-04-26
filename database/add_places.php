<?php
function listTypeVehicule()
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

?>