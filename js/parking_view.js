$(document).ready(function (e) {
    $.ajaxSetup({async: false});//Evite de poursuivre le script avant que les requetes ajax soit finies

    $.post('database/zone_view.php', {
            id_zone: 1,
            lg_table: 10
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
        var zone = $('input[name="zone"]:checked').val()
        var donnees = $this.serialize() + "&id_zone=" + zone + "&id_form=newStationnement";
        if (plaque === '') {
            alert("Le numéro de plaque n'est pas renseignée");
        }
        else {
            $.post('database/zone_manager.php', donnees);
        }

        /*On met a jour le visu*/
        $.post('database/zone_view.php', {
                id_zone: zone,
                lg_table: 10
            },
            function (data) {
                $('#view').html(data);
            });

        $('.place').click(function () {
            var id_place = $(this).attr('id');
            $.post('database/place_view.php', {id_place: id_place}, function (data) {
                $('#place_info').html(data);
            });
        });

        /*On reset le form*/
        $('#newStationnement')[0].reset();
    });

    /*Si on clique sur une place, ses infos s'affichent*/
    $('.place').click(function () {
        var id_place = $(this).attr('id');
        $.post('database/place_view.php', {id_place: id_place}, function (data) {
            $('#place_info').html(data);
        });
    });
});