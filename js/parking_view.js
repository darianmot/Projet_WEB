/*Génère une chaine alétoire de longueur length parmis l'alphabet chars*/
function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
    return result;
}

/*Génère une plaque (récente) aléatoire*/
function randomPlaque()
{
    var begin = randomString(2, 'ABCDEFGHIJKLMNOPKRSTUVWXYZ');
    var middle = randomString(3, '0123456789');
    var end  = randomString(2, 'ABCDEFGHIJKLMNOPKRSTUVWXYZ');
    return begin+middle+end;
}


/*Partie dynamique*/
$(document).ready(function () {
    $.ajaxSetup({async: false});//Evite de poursuivre le script avant que les requetes ajax soit finies
    var lg_table = 30;
    var plaque_pattern = new RegExp('^[a-zA-Z]{2}-?[0-9]{3}-?[a-zA-Z]{2}$|^[0-9]{3}-?[a-zA-Z]{3}-?[0-9]{2}$');

    /*Affiche la zone 1 après le chargement de la page*/
    $.post('database/zone_manager.php', {
            id_zone: 1,
            lg_table: lg_table,
            id_form: 'zoneView'
        },
        function (data) {
            $('#view').html(data);
        });

    /*Ajout d'un stationnement*/
    $('#newStationnement').submit(function (e) {
        e.preventDefault();

        /*On met a jour la database*/
        var $this = $(this);
        var plaque = $('#plaque').val().replace(/ /g,"").toUpperCase();
        var zone = $('input[name="zone"]:checked').val();
        var type = $('#type').val();
        var donnees = "plaque=" + plaque + "&type=" + type + "&id_zone=" + zone + "&id_form=newStationnement";
        if (!plaque_pattern.test(plaque)) {
            var help_plaque= "<p style='width: 600px'>Les plaques françaises sont de la forme <b>AA 000 AA </b> ou <b>000 AAA 00</b>.</p>";
            var error = "<h2 class = 'error'>Erreur</h2>"+help_plaque;
            $.fancybox({content: error});
            $(".fancybox-inner").attr("tabindex",1).focus();
        }
        else {
            // $.post('database/zone_manager.php', donnees);
            $.ajax({
                type: "POST",
                url: " database/zone_manager.php",
                dataType: 'json',
                data: donnees,
                success: function(retour)
                {
                    if (retour.error == 'true');
                    {
                        var error = "<h2 class = 'error'>Erreur</h2>"+retour.msg;
                        $.fancybox({content: error});
                        $(".fancybox-inner").attr("tabindex",1).focus(); //donne le focus à la fenetre modale
                    }
                },
                error: function(retour)
                {
                    if (retour.status == 200) {
                        console.log('warning due à la non synchronisation des requetes ajax')
                    }
                }
            });
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

        /*On donne surligne la plaque après la selection*/
        $('#plaque').select()
    });

    /*Si on clique sur une place, ses infos s'affichent*/
    $(document).on('click', '.place', function () {
        var id_place = $(this).attr('id');
        var isOccupee = $(this).hasClass('occupee');
        
        $.post('database/place_manager.php', {id_place: id_place, id_form: 'place_view'}, function (data) {
            var info = data;
            if (isOccupee)
            {
                info += "<button type='submit' value="+id_place+" id='end_stat_button'>Mettre fin au stationnement</button>";
            }
            $.fancybox({content: info});
        });
    });

    /*Supprime un stationnement si appuie sur le bouton FIN de la fenetre modale*/
    $(document).on('click','#end_stat_button', function () {
        var id_stationnement = $('#id_stationnement').text();
        var id_zone  = $('input[name="view_zone"]:checked').val();
        var prix_total;
        $.post('database/zone_manager.php',
            {id_stationnement: id_stationnement,
            id_form: 'totalHours'},
            function (data){
                console.log(data)
                if (data == -1) { //Cas ou un véhicule part avant la fin de sa réservation
                    prix_total = 0
                }
                else {
                    prix_total = prix(id_zone, data);
                }
                
                console.log(prix_total);
            });
        $.post('database/zone_manager.php', {
            id_stationnement: id_stationnement,
            id_form: 'endStationnement',
            prix: prix_total
        });
        $.fancybox.close();
        $.post('database/zone_manager.php', {
                id_zone: id_zone,
                lg_table: lg_table,
                id_form: 'zoneView'
            },
            function (data) {
                $('#view').html(data);
            });
    });


    /*Affichage de la zone selectionnée*/
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
        scrolling : 'no'
        }
        );

    /*Génèration une plaque aléatoire lorsqu'on clique sur l'icone random*/
    $('#random').click(function () {
        $('#plaque').val(randomPlaque());
    });
});