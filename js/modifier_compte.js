$(document).ready(function () {
    $('#modifier').click(function (e) {
        e.preventDefault();
        $.ajax({

            type: "POST",
            url: " database/update_compte.php",
            dataType : 'html',
            data: $('#modifier_form').serialize(),
            success: function(msg)

            {
                if (msg=='')
                {
                    alert('Les modifications ont bien été prises en compte');
                    ;
                }
                else
                {
                    alert(msg)};
                ;
            },

            error: function(retour)
            {alert('script non trouvé.');}
        });

    });

});

