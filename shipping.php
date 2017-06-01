<?php
  function shipping() {
    echo "<h1>Location</h1>";
    echo "";

?>

<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/highcharts.js"></script>
<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 100%; height: 100%; margin-right:2%;"></div>



        <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Shipping method'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Paid shipping',
            y: [<?php include 'shipping_paid_echo.php';?>]
        }, {
            name: 'Free shipping',
            y: [<?php include 'shipping_free_echo.php';?>],
        }]
    }]
});
        </script>

<?php
}
?>