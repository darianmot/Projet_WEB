$(document).ready(function () {
    $('#inscrire').click(function (e) {
        e.preventDefault();
        //alert($('#connexion_form').serialize());
        $.ajax({
            type: "POST",
            url: " database/inscription.php",
            dataType : 'html',
            data: $('#inscription_form').serialize(),
            success: function(msg)
            { //alert(msg);
                if (msg ='pop') {
                    alert('pop');
                }
                else
                {alert('recommence');
                    }

            },
            error: function(retour)
            {alert('script non trouvé');}
        });
        /*On reset le form*/
    });

});
