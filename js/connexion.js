$(document).ready(function () {
    $('#identifier').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: " database/connexion.php",
            dataType : 'html',
            data: $('#connexion_form').serialize(),
            success: function(msg)
            {alert (msg)

                if (msg !='echec')
                {
                    if (msg=='admin') {
                        $('#bloc_connexion').remove();
                        $('#connexion').text('Vous êtes connecté');
                        $('#zone_loader').append(' </br> Vous allez être redirigé...');
                        $('#zone_loader').loader('show');
                        $('#connexion_menu').remove();
                        $('#inscription_menu').remove();
                        window.setTimeout("window.location.href=('index.php');",500);

                    }
                    else
                    {
                        $('#bloc_connexion').remove();
                        $('#connexion').text('Vous êtes connecté');
                        $('#zone_loader').append('</br> Vous allez être redirigé...');
                        $('#zone_loader').loader('show');
                        $('#connexion_menu').remove();
                        $('#inscription_menu').remove();
                        $('#menu_nav').append("<li><a href='deconnexion.php'>Deconnexion</a></li> <li><a href='mon_compte.php'>Votre Compte </a></li>");

                        window.setTimeout("window.location.href=('index.php');",500);

                    }
                }
            
                else
            
                {
                    var echec = '<h1 class="error">Error</h1>';
                    echec += 'Combinaison identifiant/mot de passe incorrecte';
                    $.fancybox({content: echec});
                    $('#identifiant').val('');
                    $('#password').val('');
                }
                $('#onglet_connexion').text('');
            },
            error: function(retour)
            {alert('script non trouvé connexion.js');}
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

});
