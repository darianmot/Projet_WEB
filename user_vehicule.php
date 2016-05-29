<!DOCTYPE html>
<html>
<?php include("template/head.php") ?>
    <body>
<?php include("template/menu.php")?>

<div id="delete_vehicule">
    <h1>Liste de mes véhicules</h1>
    Voici les véhicules enregistrés sur votre espace client.
    <br/>Vous pouvez ajouter ou suppimer des véhicules.
    <?php
    include ("database/get_list_vehicule.php");
    $number_vehicule = count($_SESSION['user_vehicule']);
    echo "</br>Vous avez $number_vehicule véhicules enregistrés dans votre espace client";

    for($i = 0; $i<$number_vehicule; ++$i) {
        $plaque = $_SESSION['user_vehicule'][$i]['plaque'];
        $type = $_SESSION['user_vehicule'][$i]['type_vehicule'];

        if ($type == "voiture") {
            echo "<div class=\"bulle_vehicule\" id='bulle_vehicule_$i'> 
                    <i class=\"fa fa-times quit_cross\" aria-hidden=\"true\" id='quit_cross_$i'></i>
                    </br><i class=\"fa fa-3x fa-car\" aria-hidden=\"true\" ></i>
                    $plaque  
                    <form id='form_delete_vehicule_$i'>
                            <input type='hidden' name='plaque_delete' value=$plaque>
                      </form>
                  </div> ";
        }
        elseif ($type == "moto") {
            echo "<div class=\"bulle_vehicule\" id='bulle_vehicule_$i'> 
                        <i class=\"fa fa-times quit_cross\" aria-hidden=\"true\" id='quit_cross_$i'></i>
                        </br><i class='fa fa-3x fa-motorcycle' aria-hidden=\"true\"></i> 
                        $plaque 
                        <form id='form_delete_vehicule_$i'>
                            <input type='hidden' name='plaque_delete' value=$plaque>
                      </form>
                  </div> ";
        }
        elseif ($type == "handicape"){
            echo "<div class=\"bulle_vehicule\" id='bulle_vehicule_$i'> 
                        <i class=\"fa fa-times quit_cross\" aria-hidden=\"true\" id='quit_cross_$i'></i>
                        </br><i class='fa fa-3x fa-wheelchair' aria-hidden=\"true\"></i> 
                        $plaque 
                        <form id='form_delete_vehicule_$i'>
                            <input type='hidden' name='plaque_delete' value=$plaque>
                      </form>
                  </div> ";
        }

        else
        {
            echo "<div class=\"bulle_vehicule\" id='bulle_vehicule_$i'> 
                    <i class=\"fa fa-times quit_cross\" aria-hidden=\"true\" id='quit_cross_$i'></i>
                    </br><i class=\"fa fa-3x fa-car\" aria-hidden=\"true\"></i>
                    $plaque
                      
                      <form id='form_delete_vehicule_$i'>
                            <input type='hidden' name='plaque_delete' value=$plaque>
                      </form>
                      
                  </div> ";
        }
    }

    ?>

</div>



<div id="bloc_vehicule">
    <h1>Enregistrer un véhicule</h1>
    Complétez les informations requises
    <form id="form_add_vehicule">
        <label>Type de véhicule<select class="select_reserv" name="type_add_vehicule" size="1">
                <?php
                include("database/type_vehicule.php");
                $type_manager = new TypeManager();
                $type_manager->typeList();?>
        </select></label>

        <label>Plaque du véhicule <input name="plate_add_vehicule" class="encart_reserv"></label>
        <br/>
        <button type="submit" class="button_reserv" id="button_add_vehicule">

            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter mon véhicule</button>

    </form>


</div>

    </body>
<script type="text/javascript" src="js/modify_user_vehicule.js"></script>
</html>

