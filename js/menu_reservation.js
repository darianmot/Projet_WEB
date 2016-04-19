/**
 * Created by atime on 18/04/16.
 */
$(document).ready(function(){
   $("#voiture").click(function(){
       $("#reserv").replaceWith("<?php include('../formulaire_reservation.php')?>");
   });
});
