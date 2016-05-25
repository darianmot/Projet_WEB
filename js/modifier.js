$(document).ready(function () {
    $('#modifier').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: " database/modifier.php",
            dataType: 'html',
            data: $('#personal_data').serialize(),
            success: function (msg)
            {
                alert(msg)
                $('#bloc_compte').empty();
                $('#bloc_compte').append('<h1>Modifications effectuées</h1>');
                $('#bloc_compte').append('Redirection en cours');
                $('#bloc_compte').loader('show');
                window.setTimeout("window.location.href=('mon_compte.php');",500);
            },
            error: function (retour) {
                alert('Script non trouvé')
                
            }
        });
        
    })
    
})
