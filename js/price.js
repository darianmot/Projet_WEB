/**
 * Created by atime on 27/04/16.
 */

$(document).ready(function () {
    $("#button_price").click(function () {


        var price_of_day = 15;
        var price_of_hour = 2;
        var price_of_minute = 0.2;
        var coef_zone = ($('input[name="zone_price"]:checked').val() /10) + 0.9;
        var number_day = $('input[name="duree_jours"]').val();
        var number_hours = $('input[name="duree_hours"]').val();
        var number_min = $('input[name="duree_min"]').val();

        if (isNaN(coef_zone)  ) {
            alert("Veuillez sélectionner une zone puis relancer l'estimation")
        }

        else {
            var price = coef_zone * (number_day*price_of_day + number_hours *  price_of_hour + number_min *  price_of_minute);
            price = price.toFixed(2);
            $('#disp_price').empty();
            $('#disp_price').prepend('<h2> Total TTC: </h2>'+ '<h4>' +  price + '€ '+ '</h4>');
        }


    })

});
