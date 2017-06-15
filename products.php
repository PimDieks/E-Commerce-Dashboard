<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/highcharts.js"></script>
<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/modules/exporting.js"></script>

<div id="products" class="chart-product"></div>

<script type="text/javascript">

        Highcharts.chart('products', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Product Price and Stock'
            },
            colors: ['#C85A62','#545E8F','#687DBD','#80A5DD','#AFBDE7',],
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [<?php include 'sql/product_echo.php';?>],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Price in Euros',
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
                },
                series: {
                    pointPadding: 0, // Defaults to 0.1
                    groupPadding: 0.01 // Defaults to 0.2
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 0,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Product Price',
                data: [<?php include 'sql/product_count_echo.php';?>],
            },{
                name: 'Product Stock',
                data: [<?php include 'sql/product_stock_echo.php';?>],
            }]
        });
    </script>