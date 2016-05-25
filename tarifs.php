<!DOCTYPE html>
<?php include("template/menu.php"); ?>

<html>
<header>
    <?php include("template/head.php"); ?>
</header>
<body>

<section class="tarifs_container">
    <article>
        <div class="tarifs_title">
            nos tarifs
        </div>
        <table class="tarifs_table">
            <tbody>
                <tr><td class="tarifs_td">Nombre de jours</td><td>1 à 5</td><td>6 à 10</td><td>11 à 15</td><td>16 à 20</td><td>20 à 30</td></tr>
                <tr><td class="tarifs_td">Tarifs</td><td>49 €</td><td>59 €</td><td>69 €</td><td>79 €</td><td>149 €</td></tr>
            </tbody>
        </table>
    </article>
    <img src="./media/images/porco_rosso.jpg" class="tarifs_img">
</section>

<div id="div_report" style="height:600px;width:700px; "></div>
<script>
    $(document).ready(function () {
        var tarif1 = [];
        var tarif2 = [];
        var tarif3 = [];
        for (i = 0; i < 100; i++) {
            i *= 5;
            tarif1.push([i, prix(1, i)]);
            tarif2.push([i, prix(2, i)]);
            tarif3.push([i, prix(3, i)]);
        }
        $.jqplot('div_report', [tarif1, tarif2, tarif3],
            {
                title: 'Tarif de chaque zone',
                axes: {
                    yaxis: {min: -10, max: 240, label: '€'},
                    xaxis: {label: 'heures'}},
                legend: {
                    labels: ['Zone 1'.fontcolor('black'), 'Zone 2'.fontcolor('black'), 'Zone 3'.fontcolor('black')],
                    renderer: $.jqplot.EnhancedLegendRenderer,
                    show: true
                },
                series: [{color: '#5FAB78'}]
            });
    });
</script>

</body>
</html>