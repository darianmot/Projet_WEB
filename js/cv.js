$(document).ready(function () {
    $('#cv_simon').click(function (e) {
        e.preventDefault();

            url: " cv_groupes.php",
            dataType : 'html',
            success: function(msg)
            {
                $('#body_cv').append(msg);
            }
        
    });
});
