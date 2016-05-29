String.prototype.format = function() {
    var str = this;
    for (var i = 0; i < arguments.length; i++) {
        var reg = new RegExp("\\{" + i + "\\}", "gm");
        str = str.replace(reg, arguments[i]);
    }
    return str;
};

function plotTarif(){
    var tarif1 = [];
    var tarif2 = [];
    var tarif3 = [];
    for (h = 0; h < 100; h+=5) {
        tarif1.push([h, eval($('#tarif1').val())]);
        tarif2.push([h, eval($('#tarif2').val())]);
        tarif3.push([h, eval($('#tarif3').val())]);
    }
    $.jqplot('div_graph', [tarif1, tarif2, tarif3],
        {
            title: 'Tarif de chaque zone',
            axes: {
                yaxis: {min: -10, max: 240, label: '€'},
                xaxis: {label: 'heures'}},
            legend: {
                labels: ['Zone 1'.fontcolor('black'), 'Zone 2'.fontcolor('black'), 'Zone 3'.fontcolor('black')],
                renderer: $.jqplot.EnhancedLegendRenderer,
                show: true
            },
            series: [{color: '#5FAB78'}],
            highlighter: {
                show: true,
                sizeAdjust: 7.5
            }
        });
}

$(document).ready(function (e) {
    $.ajaxSetup({async: false});//Evite de poursuivre le script avant que les requetes ajax soit finies


    /*Affichage des tarifs dans le formulaire*/
    for(i=1; i<4; i++)
    {
        var donnees = "id_zone="+i+"&id_form=getPrice";
        $.post('database/zone_manager.php', donnees, function (retour) {
            $("#tarif{0}".format(i)).val(retour);
        });
    }

    /*On affiche et on dynamise les tarifs en graph*/
    plotTarif();
    $('.tarif').on('change', function() {plotTarif()});

    /*Ajout de places dans la BDD*/
    $('#submit_newPlace').click(function (e) {
        e.preventDefault();

        //On met a jour la database
        var $this = $('#newPlace');
        var zone = $('input[name="id_zone"]:checked').val();
        var donnees = $this.serialize() + "&id_form=newPlace";
        console.log(donnees);
        if ($('#nombre').val() <= 0) {
            alert("Le nombre de places à rajouter est incorrect");
        }
        else {
            $.post('database/place_manager.php', donnees);
            var msg = '<p style="color:green;">' + $('#nombre').val() +
                ' place(s) de type "' + $('#type').val() +
                '" ajoutée(s) à la zone ' + zone + '</p>';
            $.fancybox({content: msg});
        }

        /*On reset le form*/
        donnees = $this.serialize() + "&id_form=getCapacityByType";
        $.post('database/zone_manager.php', donnees, function (retour) {
            $('#freecapacity').text(retour);
            $('#nombre').val(1);
        });

    });

    /*Mis à jour du nombre de places que l'on peut supprimer*/
    $('input[name="id_zone"], #type').change(function () {
        var $this = $('#newPlace');
        var donnees = $this.serialize() + "&id_form=getCapacityByType";
        $.post('database/zone_manager.php', donnees, function (retour) {
            $('#freecapacity').text(retour);
        });
    });


    /*Suppression de places*/
    $('#submit_delPlace').click(function (e) {
        e.preventDefault();

        //On met a jour la database
        var $this = $('#newPlace');
        var zone = $('input[name="id_zone"]:checked').val();
        var donnees = $this.serialize() + "&id_form=delPlace";
        if ($('#nombre').val() <= 0) {
            alert("Le nombre de places à supprimer est incorrect");
        }
        else {
            $.post('database/place_manager.php', donnees);
            var msg = '<p style="color:green;">' + $('#nombre').val() +
                ' place(s) de type "' + $('#type').val() +
                '" supprimée(s) de la zone ' + zone + '</p>';
            $.fancybox({content: msg});
        }

        /*On reset le form*/
        donnees = $this.serialize() + "&id_form=getCapacityByType";
        $.post('database/zone_manager.php', donnees, function (retour) {
            $('#freecapacity').text(retour);
            $('#nombre').val(1);
        });
    });

    /*Modification des tarfis dans la BDD*/
    $('#submit_setTarif').click(function (e) {
        e.preventDefault();

        /*On met a jour la database*/
       for(i=1; i<4; i++)
       {
           var donnees = {"id_zone=": i, "&id_form": "setPrice" , '&price=' : $("#tarif{0}".format(i)).val()};
           $.ajax({
               type: "POST",
               url: " database/zone_manager.php",
               data: {'id_zone': i, 'id_form': 'setPrice' , 'price': $("#tarif{0}".format(i)).val()},
               async: false,
               success: function(retour)
               {
                   console.log('Tarif ' + i + ' modifié');
               },
               error: function(retour)
               {
                   console.log('erreur dans le calcul du prix');
                   if (retour.status == 200) {
                       console.log('warning due à la non synchronisation des requetes ajax')
                   }
               }
           });
       }
        $('#msg').hide();
        $('#msg').html('<p style="color:green;">Tarifs modifiés');
        $('#msg').show(700);
    });
});
