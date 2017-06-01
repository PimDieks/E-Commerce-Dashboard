<?php
  function location() {
    echo "<h1>Location</h1>";
    echo "";

?>

<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/highcharts.js"></script>
<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 100%; height: 100%; margin-right:2%;"></div>



        <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: '<p>Overview of customer location</p>'
    },
    subtitle: {
        text: ''
    },
    colors: ['#80A5DD',],
    xAxis: {
        categories: [<?php include 'location_echo.php';?>],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of customers',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ''
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Number of customers',
        data: [<?php include 'location_count_echo.php';?>]
    }]
});
        </script>

<?php
}
?>