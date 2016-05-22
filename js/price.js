
/*Fonction qui calcule le prix de la zone choisie en fonction de l'heure*/
function prix(id_zone, heures)
{
    $.ajax({
        type: "POST",
        url: " database/zone_manager.php",
        data: "id_form=getPrice" + '&id_zone='+ id_zone,
        success: function(retour)
        {
            var h = heures;
            var prix = eval(retour);
            alert('Prix total:' + prix); // Changer le alert ce qu'il faut en faire
        },
        error: function(retour)
        {
            if (retour.status == 200) {
                console.log('warning due à la non synchronisation des requetes ajax')
            }
        }
    });
}


$(document).ready(function () {
    var id_zone = 1;
    var heures = 5; //A remplacer par ce qui va bien
    $('#price').click(function() {
        prix(id_zone, heures);
    });
    
    $("#button_price").click(function () {


        var price_of_day = 15;
        var price_of_hour = 2;
        var price_of_minute = 0.2;
        var coef_zone = ($('input[name="zone_price"]:checked').val() /10) + 0.9;

        var number_day = $("#duree_day").val();
        var number_hours = $("#duree_hour").val();
        var number_min = $("#duree_minute").val();
        console.log(number_day,number_hours, number_min);
        alert(number_hours);


        if (isNaN(coef_zone)  ) {
            alert("Veuillez sélectionner une zone puis relancer l'estimation")
        }

        else {
            var price = coef_zone * (number_day*price_of_day + number_hours *  price_of_hour + number_min *  price_of_minute);
            price = price.toFixed(2);
            $('#disp_price').empty();
            $('#disp_price').prepend('<h2> Total : </h2>'+ '<h4>' +  price + '€ '+ '</h4>');
        }


    })

});
