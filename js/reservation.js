$(document).ready(function () {

    $('input[name="id_zone"]').change(function () {
        var entry_date = new Date($('input[name = "entry_date"]').val()+':00');
        var exit_date = new Date($('input[name = "exit_date"]').val()+':00');
        var id_zone = $('input[name="id_zone"]:checked').val();
        var duree = dateDiff(entry_date, exit_date);
        var duree_in_hours = (duree.day * 24 + duree.hour);
        var prix_total =  prix(id_zone, duree_in_hours);
        $('#disp_price').html('<h2> Total : </h2>'+ '<h4>' +  prix_total + '€ '+ '</h4>');
        $('input[name="price_input"]').val(prix_total)
    });
    

    /*fancybox (fenetre modale)*/
    $('.fancybox').fancybox({
        arrows: false, //enleve les flèches de navigation
        openEffect: 'fade',
        keys: {
            next : [null],
            prev : [null],
            close: [27], // escape key
            play: [null], // space - start/stop slideshow
            toggle: [70]  // letter "f" - toggle fullscreen
        },
        scrolling : 'no',
    });
});