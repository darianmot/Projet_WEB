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
                                    $('#bloc_connexion').remove();
                                    $('#connexion').text('Vous etes connecté');
                                    $()
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
            {alert('script non trouvé');}
        });
    });

});

