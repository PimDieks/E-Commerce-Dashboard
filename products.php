<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/highcharts.js"></script>
<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/modules/exporting.js"></script>

<div id="products" class="chart"></div>

<script type="text/javascript">

        Highcharts.chart('products', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Overview of products and prices'
            },
            subtitle: {
                text: ''
            },
            colors: ['#80A5DD',],
            xAxis: {
                categories: [<?php include 'product_echo.php';?>],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Price',
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
                name: 'Products',
                data: [<?php include 'product_count_echo.php';?>]
            }]
        });
    </script>