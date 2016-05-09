$(document).ready(function () {
    $('#identifier').click(function (e) {
        e.preventDefault();
        // alert($('#connexion_form').serialize());
        $.ajax({
            type: "POST",
            url: " database/connexion.php",
            dataType : 'html',
            data: $('#connexion_form').serialize(),
            success: function(msg)
            { //alert(msg);
            if (msg !='echec') {
                $('#menu_p').append(msg);
                $('#bloc_connexion').remove();
                $('#connexion').text('Vous etes connecté');
            }
            else
            {alert('identifiant ou mot de passe incorrectes');
                $('#identifiant').val('');
                $('#password').val('');}
                $('#onglet_connexion').text('');
            },
            error: function(retour)
            {alert('script non trouvé');}
        });
        /*On reset le form*/
    });
    
});
