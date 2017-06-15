<div id="stock" class="chart"></div>

<script type="text/javascript">

    Highcharts.chart('stock', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Low Product Stock',
            style: {
                color: '#000'
            }
        },
        colors: ['#C85A62',],
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [<?php include 'sql/stock_echo.php';?>],
            crosshair: true,
            labels: {
                style: {
                    fontSize: '13',
                    color: '#000'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                style: {
                    fontSize: '13',
                    color: '#000'
                }
            },
            labels: {
                style: {
                    fontSize: '13',
                    color: '#000'
                }
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:13px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Number of Stock',
            data: [<?php include 'sql/stock_count_echo.php';?>]
        }]
    });
</script>