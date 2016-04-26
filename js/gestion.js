$(document).ready(function (e) {
    $.ajaxSetup({async: false});//Evite de poursuivre le script avant que les requetes ajax soit finies

    $('#newPlace').submit(function (e) {
        e.preventDefault();

        //On met a jour la database
        var $this = $(this);
        var zone = $('input[name="id_zone"]:checked').val();
        var donnees = $this.serialize() + "&id_form=newPlace";
        if ($('#nombre').val() <= 0) {
            alert("Le nombre de places à rajouter est incorrect");
        }
        else {
            $.post('database/zone_manager.php', donnees);
            $('#message').html('<p style="color:green;">' + $('#nombre').val() +
                ' place(s) de type "' + $('#type').val() +
                '" ajoutée(s) à la zone ' + zone + '</p>');

        }


        //On reset le form
        $('#newPlace')[0].reset();

    });
});
