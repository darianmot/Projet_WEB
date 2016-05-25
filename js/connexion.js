$(document).ready(function () {
    $('#identifier').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: " database/connexion.php",
            dataType : 'html',
            data: $('#connexion_form').serialize(),
            success: function(msg)
            {

                if (msg !='echec')
                {
                    if (msg=='admin') {
                        $('#bloc_connexion').remove();
                        $('#connexion').text('Vous êtes connecté');
                        $('#zone_loader').append(' </br> Vous allez être redirigé...');
                        $('#zone_loader').loader('show');
                        $('#connexion_menu').remove();
                        $('#inscription_menu').remove();
                        window.setTimeout("window.location.href=('index.php');",3000);

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
                    alert('identifiant ou mot de passe incorrectes');
                    $('#identifiant').val('');
                    $('#password').val('');
                }
                $('#onglet_connexion').text('');
            },
            error: function(retour)
            {alert('script non trouvé connexion.js');}
        });
    });
    
});
