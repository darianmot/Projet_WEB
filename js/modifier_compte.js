$(document).ready(function () {
    $('#modifier').click(function (e) {
        e.preventDefault();
        //alert($('#connexion_form').serialize());
        $.ajax({

            type: "POST",
            url: " database/update_compte.php",
            dataType : 'html',
            data: $('#modifier_form').serialize(),
            success: function(msg)

            {
                if (msg=='Votre inscrition a bien été prise en compte, vous pouvez dès à present vous connecter')
                {
                    alert("Les modifications ont bien été prises en compte");
                    ;
                }
                else
                {
                    alert("l'identifiant utilisé existe déjà")};
                ;
            },

            error: function(retour)
            {alert('script non trouvé');}
        });

    });

});

