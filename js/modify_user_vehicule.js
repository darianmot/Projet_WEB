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
                window.setTimeout("window.location.href=('user_vehicule.php');",500);
            },
            
            error: function (msg) {
                alert('Script non trouvé')
            }
        })
    });


    $('.quit_cross').click(function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        id = id.replace('quit_cross_','');
        var id_form = 'form_delete_vehicule_'.concat(id);
        document.getElementById(id_form).submit();
        $.ajax({
            type: "POST",
            url: "database/delete_vehicule_from_user.php",
            datatype: "html",
            data: $('#'+id_form).serialize(),
            success: function (msg) {
                $('#bulle_vehicule_'+id).empty();
                $('#bulle_vehicule_'+id).loader('show');
                window.setTimeout("window.location.href=('user_vehicule.php');",500);
            }
            
        })
        
        
    })

    
})
