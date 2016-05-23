
$(document).ready(function () {
    $('#identifier').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: " database/connexion.php",
            dataType : 'json',
            success: function(msg)
            { var donnes = $.getJSON(msg);}

            {
                if (1==1)
                {
                    $('#connexion_menu').remove();
                    $('#inscription_menu').remove();
                    alert(donnes.1);
                    //$('#menu_nav').append();

                }

                else

                {alert(msg)
                }
            },
            error: function(retour)
            {alert('script non trouvé');}
        });
    });

});

