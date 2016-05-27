$(document).ready(function () {
    $('#cv_simon').click(function (e) {
        e.preventDefault();
        $.ajax
        ({
            url: " cv_sim.php",
            dataType : 'html',
            success: function(msg)
            {
                $('#body_cv').append(msg);
            }
        })
    });
});
