<?php include("template/head.php") ?>
    </header>
    <body>
<?php include("template/menu.php")?>


<div id="bloc_vehicule">
    <h1>Enregistrer un véhicule</h1>
    Complétez les informations requises
    <form id="form_add_vehicule">
        <label>Type de véhicule</label><select class="select_reserv" name="type_add_vehicule" size="1">
            <option value="" disabled selected hidden>Type de véhicule</option>
            <option>Voiture</option>
            <option>Moto</option>
            <option>Handicapé</option>
        </select>

        <label>Plaque du véhicule</label><input name="plate_add_vehicule" class="encart_reserv">
        </br>
        <button type="submit" class="button_reserv" id="button_add_vehicule">

            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter mon véhicule</button>

    </form>


</div>


<div id="delete_vehicule">
    <h1>Supprimer un véhicule</h1>
    Sélectionnez un véhicule dans la liste ci-dessous
    <?php
    include ("database/get_list_vehicule.php");
    $number_vehicule = count($_SESSION['user_vehicule']);
    echo "</br>Vous avez $number_vehicule véhicules enregistrés dans votre espace client";

    for($i = 0; $i<$number_vehicule; ++$i) {
        $plaque = $_SESSION['user_vehicule'][$i]['plaque'];
        $type = $_SESSION['user_vehicule'][$i]['type_vehicule'];
        echo "</br>Type: $type Plaque: $plaque";
    };

    ?>



</div>





<?php include("template/footer.php") ?>
    </body>
</html>

