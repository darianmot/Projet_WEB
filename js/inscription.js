$(document).ready(function () {
    $('#inscrire').click(function (e) {
        e.preventDefault();
        $.ajax({
            
            type: "POST",
            url: " database/inscription.php",
            dataType : 'html',
            data: $('#inscription_form').serialize(),
            success: function(msg)
            {
                if (msg=='Votre inscrition a bien été prise en compte, vous pouvez des à present vous identifier dans longlet connexion!')
                { 
                    $('#bloc_inscrire').remove();
                    $('#sinscrire').text('Vous êtes inscris');
                }
                else
                {
                    alert(msg)
                }
                $('#nom_pseudonyme').text('');
            },
            
            error: function(retour)
            {alert('script non trouvé');}
        });
        
    });

});
