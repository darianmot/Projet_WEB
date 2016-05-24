
/*Fonction qui calcule le prix de la zone choisie en fonction de l'heure*/
function prix(id_zone, heures) {
    var prix_total = 0;
    $.ajax({
        type: "POST",
        url: " database/zone_manager.php",
        data: "id_form=getPrice" + '&id_zone='+ id_zone,
        success: function(retour)
        {
            var h = heures;
            prix_total = eval(retour);
            $('#disp_price').empty();
            $('#disp_price').prepend('<h2> Total : </h2>'+ '<h4>' +  prix_total + '€ '+ '</h4>');
            $('input[name="price_input"]').val(prix)
        },
        error: function(retour)
        {
            if (retour.status == 200) {
                console.log('warning due à la non synchronisation des requetes ajax')
            }
        }
    });
    return prix_total
}


function dateDiff(date1, date2){
    var diff = {};                         // Initialisation du retour
    var tmp = date2 - date1;

    tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
    diff.sec = tmp % 60;                    // Extraction du nombre de secondes

    tmp = Math.floor((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
    diff.min = tmp % 60;                    // Extraction du nombre de minutes

    tmp = Math.floor((tmp-diff.min)/60);    // Nombre d'heures (entières)
    diff.hour = tmp % 24;                   // Extraction du nombre d'heures

    tmp = Math.floor((tmp-diff.hour)/24);   // Nombre de jours restants
    diff.day = tmp;

    return diff;
}


$(document).ready(function () {
    
    $('input[name="zone_price"]').click(function () {
        var entry_date = new Date($('input[name = "entry_date"]').val()+':00');
        var exit_date = new Date($('input[name = "exit_date"]').val()+':00');
        var id_zone = $('input[name="zone_price"]:checked').val();
        var duree = dateDiff(entry_date, exit_date);
        var duree_in_hours = (duree.day * 24 + duree.hour + (duree.min / 60)).toFixed(2); /* A modifier, le prix horaire est peut etre insuffisant */
        prix(id_zone, duree_in_hours);
        })
});
