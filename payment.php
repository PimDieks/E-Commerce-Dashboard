<div id="payment" class="chart"></div>

<script type="text/javascript">

            Highcharts.chart('payment', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Payment<br>Method',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Payment Method',
            innerSize: '50%',
            colors: ['#C85A62','#545E8F',],
            data: [
                ['Cash', <?php include 'sql/payment_cash_echo.php';?>],
                ['iDEAL', <?php include 'sql/payment_ideal_echo.php';?>],
                {
                    name: 'Proprietary or Undetectable',
                    y: 0.2,
                    dataLabels: {
                        enabled: false
                    }
                }
            ]
        }]
    });
</script>