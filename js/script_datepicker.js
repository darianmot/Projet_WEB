/**
 * Created by atime on 28/04/16.
 */


$(function ($) {
    var datepickers;
    datepickers = $('.encart_datepicker').datetimepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        showAnim: "slideDown",
        showButtonPanel: true,
        onSelect: function (date, inst) {
            $(".ui-datepicker a").removeAttr("href");
            $(this).change();
            var option = this.name == "entry_date" ? "minDate" : "maxDate";
            datepickers.not('#' + this.name).datetimepicker('option', option, date)
        },
        

        });

});

