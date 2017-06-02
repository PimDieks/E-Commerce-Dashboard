<?php
  function products() {
    echo "<h1>Products</h1>";
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
            text: 'Overview of products with prices and stock',
            style: {
                color: '#000'
            }
        },
        subtitle: {
            text: ''
        },
        colors: ['#80A5DD',],
        xAxis: {
            categories: [<?php include 'product_echo.php';?>],
            title: {
                text: null
            },
            labels: {
                style: {
                    fontSize: '13',
                    color: '000'
                }
            }
        },
        yAxis: {
            distance: 0,
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify',
                style: {
                    fontSize: '13',
                    color: '#000'
                }
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
            name: 'Products',
            data: [<?php include 'product_count_echo.php';?>],
            pointWidth: 20
        },{
            name: 'Stock',
            data: [<?php include 'product_stock_echo.php';?>],
            color: '#C85A62',
            pointWidth: 20
        }]
    });
</script>

<?php
    }
?>