/**
 * Created by atime on 28/04/16.
 */


$(function ($) {
    var datepickers;
    datepickers = $('.encart_datepicker').datepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        defaultDate: null,
        showAnim: "slideDown",
        onSelect: function (date) {
            var option = this.name == "entry_date" ? "minDate" : "maxDate";
            datepickers.not('#' + this.name).datepicker('option', option, date)
        }

        });

    var timepickers;
    timepickers = $('.encart_timepicker').timepicker({
        timeInput: true,
        showAnim: "slideDown"
/*
        onSelect: function (time) {
            var entry_date= $('.encart_datepicker[name="entry_date"]').val();
            var exit_date = $('.encart_datepicker[name="exit_date"]').val();
            console.log(entry_date == exit_date);
            console.log(entry_date);
            console.log(exit_date);
            console.log('Time:' + time);


            if (entry_date == exit_date){
                console.log('same date !!!!!!!!!!!');

                var option = this.name == "entry_time" ? "minTime" : "maxTime";
                timepickers.not('#' + this.name).timepicker('option', option, time)
            }

        }
*/

    })
});
