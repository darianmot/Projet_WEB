<?php


class Zone
{
    private $bdd;
    private $id_zone;

    /*Constructeur*/
    public function __construct($bdd, $id_zone)
    {
        $this->setBdd($bdd);
        $this->setIdZone($id_zone);
    }


    /*Getters*/
    public function getBdd()
    {
        return $this->bdd;
    }

    public function getIdZone()
    {
        return $this->id_zone;
    }


    /*Setters*/
    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }

    public function setIdZone($id_zone)
    {
        $this->id_zone = $id_zone;
    }


    /*Ajouts/suppresions/modfication d'une place*/
    public function addPlace($type_vehicule)
    {
        $this->getBdd()->query("INSERT INTO Place (`id_place`, `id_zone`, `type_vehicule`) 
        VALUES (NULL, $this->id_zone, '{$type_vehicule}');");
    }


    /*Stationnements*/
    private function addVehicule($plaque, $type_vehicule)
    {
        $this->getBdd()->query("INSERT INTO Vehicule (`plaque`, `type_vehicule`)
        VALUES('{$plaque}', '{$type_vehicule}') ON DUPLICATE KEY UPDATE plaque = '{$plaque}' ");

    }

    public function getFreePlace($type_vehicule)
    {
        $response = $this->getBdd()->query("SELECT MIN(Place.id_place) AS id_place FROM Stationnement
                    RIGHT JOIN Place ON Stationnement.id_place = Place.id_pLace
                    WHERE ((Stationnement.etat NOT IN ('occupee','reservee') or Stationnement.id_place IS NULL) 
                            AND Place.type_vehicule = '$type_vehicule' 
                            AND Place.id_zone = $this->id_zone);");

        $place = $response->fetch_assoc();
        return $place['id_place'];
    }

    public function addStationnement($plaque, $type_vehicule)
    {
        $date = date("Y-m-d H:i:s");
        $this->addVehicule($plaque, $type_vehicule);
        $place = $this->getFreePlace($type_vehicule);
        $this->getBdd()->query("INSERT INTO Stationnement(`id_stationnement`, `plaque`, `id_place`, `date_debut`, `date_fin`, `etat`, `id_facture`)
      VALUES (NULL, '{$plaque}', '{$place}', '{$date}', DATE_ADD('{$date}', INTERVAL 1 DAY), 'occupee', NULL);");
    }


}

if (isset($_POST['id_form'])) {
    $bdd = new mysqli('localhost', 'root', 'mysql', 'ienac15_');
    $zone = new Zone($bdd, $_POST['id_zone']);
    if ($_POST['id_form'] == 'newStationnement') {
        if (isset($_POST['plaque']) and isset($_POST['type'])) {
            $zone->addStationnement($_POST['plaque'], $_POST['type']);
        }
    } elseif ($_POST['id_form'] == 'newPlace') {
        if (isset($_POST['nombre'])) {
            for ($i = 1; $i <= $_POST['nombre']; $i++) {
                $zone->addPlace($_POST['type']);
            }
        }
    }

}

?>