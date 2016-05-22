$(document).ready(function () {
    
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
