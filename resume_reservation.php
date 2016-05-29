<!DOCTYPE html>

<html>
<header>
<?php include("template/head.php");?>
</header>
<body>
<?php include("template/menu.php");?>


<!-- Début résumé -->


<?php
if (isset($_POST['entry_date'], $_POST['exit_date'], $_POST['selection_vehicule'], $_POST['price_input'], $_POST['id_zone'], $_SESSION['identifiant'])) {
    try {
        include_once "database/client_manager.php";
        include_once "database/zone_manager.php";
        $connection = new Connection();
        $bdd = $connection->getBdd();
        $client = new ClientManager($bdd, $_SESSION['identifiant']);
        $zone = new ZoneManager($bdd, $_POST['id_zone']); 


        $entry_date = str_replace("/","-",$_POST['entry_date']);
        $exit_date = str_replace("/","-",$_POST['exit_date']);
        $vehicule = $_POST['selection_vehicule'];
        $prix = $_POST['price_input'];

        try {


            echo "<h2>Réservation</h2>";
            echo "Véhicule: $vehicule ";
            echo "<br/>Entrée le ", $entry_date;
            echo "<br/>Sortie le ", $exit_date;
            echo "<br/> Prix : $prix €";

            echo "<h2>Solde</h2>";
            echo 'Ancien solde : '.$client->getSolde();
            $client->removeSolde($prix);
            echo "<br/>";
            echo 'Nouveau solde :', $client->getSolde();
            $zone->reservation($entry_date, $exit_date, $vehicule);

        }
        catch (Exception $e)
        {
            if ($e->getMessage() == 'full')
            {
                echo 'La zone est pleine pour le type de vehicule selectionnée';
            }
            else{
                echo 'Erreur : ', $e->getMessage();
            }
        }

    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }

}
else
{
    echo "Une erreur est survenue lors de la réservation";
}
?>

<br/>
<a href="index.php"><button type="button" class="button_reserv">Retour à l'accueil</button></a>



<?php include ("template/footer.php");?>
</body>
</html>
    