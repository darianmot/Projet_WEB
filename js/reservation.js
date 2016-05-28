$(document).ready(function () {

    $('input[name="zone_price"]').change(function () {
        var entry_date = new Date($('input[name = "entry_date"]').val()+':00');
        var exit_date = new Date($('input[name = "exit_date"]').val()+':00');
        var id_zone = $('input[name="zone_price"]:checked').val();
        var duree = dateDiff(entry_date, exit_date);
        var duree_in_hours = (duree.day * 24 + duree.hour + (duree.min / 60)).toFixed(2); /* A modifier, le prix horaire est peut etre insuffisant */
        var prix_total =  prix(id_zone, duree_in_hours);
        $('#disp_price').html('<h2> Total : </h2>'+ '<h4>' +  prix_total + '€ '+ '</h4>');
        $('input[name="price_input"]').val(prix_total)
    })
    
    $('')
});