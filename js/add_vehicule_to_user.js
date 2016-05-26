$(document).ready(function () {
    $('#button_add_vehicule').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "database/add_vehicule_to_user.php",
            datatype: "html",
            data: $('#form_add_vehicule').serialize(),
            success: function(msg){
                $('#bloc_vehicule').empty();
                $('#bloc_vehicule').append('<h1>Véhicule ajouté</h1>');
                $('#bloc_vehicule').append('Redirection en cours');
                $('#bloc_vehicule').loader('show');
                window.setTimeout("window.location.href=('mon_compte.php');",500);
            },
            
            error: function (msg) {
                alert('Script non trouvé')
            }
                
            
            
            
        })
        
        
    })
    
    
})
