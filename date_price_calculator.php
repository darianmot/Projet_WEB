<?php

function dateDiff($date1, $date2){
    $diff = abs(strtotime($date1) - strtotime($date2)); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
    $retour = array();

    $tmp = $diff;
    $retour['second'] = $tmp % 60;

    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;

    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;

    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp;

    return $retour;
}


$entry_date = $_POST['entry_date'];
$exit_date = $_POST['exit_date'];
$type = $_POST['type'];
echo "<br/> Entrée le ";
echo "$entry_date " ;
echo "Sortie le ";
echo "$exit_date ";
$duree = dateDiff($entry_date,$exit_date);
$duree_day = $duree["day"];
$duree_hour = $duree["hour"];
$duree_minute = $duree["minute"];
echo "</br> Durée: ";
echo "$duree_day jours ";
echo "$duree_hour heures ";
echo "$duree_minute minutes";
?>