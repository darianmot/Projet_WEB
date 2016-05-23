
$(document).ready(function () {
    $('#identifier').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: " database/connexion.php",
            data:"identifiant="+identifiant,
            success: function(msg)


            {
                if (msg!='echec')
                {
                    $('#connexion_menu').remove();
                    $('#inscription_menu').remove();
                    $('#menu_nav').append("<li><a href='deconnexion.php'>Deconnexion</a></li> <li><a href='mon_compte.php'>Votre Compte </a></li>")

                }

                else

                {
                }
            },
            error: function(retour)
            {alert('script non trouvé');}
        });
    });

});

