$(document).ready(function (e) {
    $.ajaxSetup({async: false});//Evite de poursuivre le script avant que les requetes ajax soit finies
    var lg_table = 30;

    $.post('database/zone_manager.php', {
            id_zone: 1,
            lg_table: lg_table,
            id_form: 'zoneView'
        },
        function (data) {
            $('#view').html(data);
        });

    /*En cas d'envoie du formulaire*/
    $('#newStationnement').submit(function (e) {
        e.preventDefault();

        /*On met a jour la database*/
        var $this = $(this);
        var plaque = $('#plaque').val();
        var zone = $('input[name="zone"]:checked').val();
        var donnees = $this.serialize() + "&id_zone=" + zone + "&id_form=newStationnement";
        if (plaque === '') {
            alert("Le numéro de plaque n'est pas renseignée");
        }
        else {
            $.post('database/zone_manager.php', donnees);
        }

        /*On met a jour le visu*/
        $.post('database/zone_manager.php', {
                id_zone: zone,
                lg_table: lg_table,
                id_form: 'zoneView'
            },
            function (data) {
                $('#view').html(data);
            });


        $('.place').click(function () {
            var id_place = $(this).attr('id');
            $.post('database/place_manager.php', {id_place: id_place, id_form: 'place_view'}, function (data) {
                $('#place_info').html(data);
            });
        });

        /*On reset le form*/
        $('#newStationnement')[0].reset();
    });

    /*Si on clique sur une place, ses infos s'affichent*/
    $('.place').click(function () {
        var id_place = $(this).attr('id');
        $.post('database/place_manager.php', {id_place: id_place, id_form: 'place_view'}, function (data) {
            $('#place_info').html(data);
        });
    });
    $('input[name="view_zone"]').change(function () {
        var zone = $('input[name="view_zone"]:checked').val();
        $.post('database/zone_manager.php', {
                id_zone: zone,
                lg_table: lg_table,
                id_form: 'zoneView'
            },
            function (data) {
                $('#view').html(data);
            });
    });
});