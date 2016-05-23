
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
            return prix
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
    
    $("#button_price").click(function () {

        $.ajax({
            type: "GET",
            url: "date_price_calculator.php",
            data: "duree_hour=" + "&duree_hour",
            success: function (duree_hour) {
                var id_zone = $('input[name="zone_price"]:checked').val();
                alert(duree_hour);
                if (isNaN(id_zone)  ) {
                    alert("Veuillez sélectionner une zone puis relancer l'estimation")
                }

                else {
                    var price = prix(id_zone, duree_hour);
                    price = price.toFixed(2);
                    $('#disp_price').empty();
                    $('#disp_price').prepend('<h2> Total : </h2>'+ '<h4>' +  price + '€ '+ '</h4>');
                }
            }

        })
    })

});
