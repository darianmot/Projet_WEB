
/*Fonction qui calcule le prix de la zone choisie en fonction de l'heure*/
function prix(id_zone, heures) {
    var prix_total = 0;
    $.ajax({
        type: "POST",
        url: " database/zone_manager.php",
        data: "id_form=getPrice" + '&id_zone='+ id_zone,
        async: false,
        success: function(retour)
        {
            var h = heures;
            console.log('heures : ', h);
            prix_total = eval(retour);
            console.log('prix :', prix_total);
        },
        error: function(retour)
        {
            console.log('erreur dans le calcul du prix');
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

