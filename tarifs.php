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
    </article>

    <div class="tarifs_graph" id="div_report" style="height:600px;width:700px; "></div>
    <script>
        $(document).ready(function () {
            var tarif1 = [];
            var tarif2 = [];
            var tarif3 = [];
            for (i = 0; i < 100; i++) {
                tarif1.push([i, prix(1, i)]);
                tarif2.push([i, prix(2, i)]);
                tarif3.push([i, prix(3, i)]);
                i += 5;
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
                    series: [{color: '#5FAB78'}],
                    highlighter: {
                        show: true,
                        sizeAdjust: 7.5
                    }
                });
        });
    </script>
    <img src="./media/images/porco_rosso.jpg" class="tarifs_img">

</section>



</body>
</html>