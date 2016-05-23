$(function ($) {
    var datepickers;
    datepickers = $('.encart_datepicker').datetimepicker({
        dateFormat: 'yy/mm/dd',
        minDate: 0,
        showAnim: "slideDown",
        showButtonPanel: true,
        onSelect: function (date) {
            $(".ui-datepicker a").removeAttr("href");
            $(this).change();
            var option = this.name == "entry_date" ? "minDate" : "maxDate";
            datepickers.not('#' + this.name).datetimepicker('option', option, date)
        }
        

        });

});

