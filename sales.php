<div id="sales" class="chart"></div>

<script type="text/javascript">

    Highcharts.chart('sales', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Top 5 Product Sales',
            style: {
                color: '#000'
            }
        },
        colors: ['#545E8F',],
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [<?php include 'sql/sales_echo.php';?>],
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
            name: 'Number of Sales',
            data: [<?php include 'sql/sales_count_echo.php';?>]
        }]
    });
</script>