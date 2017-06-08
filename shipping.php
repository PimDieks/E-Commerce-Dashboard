<div id="shipping" class="chart"></div>

<script type="text/javascript">

        Highcharts.chart('shipping', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Overview of the shipping method'
            },
            colors: ['#80A5DD','#C85A62',],
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    colors: ['#C85A62','#545E8F','#687DBD','#80A5DD','#AFBDE7',],
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
                name: 'Percentage',
                colorByPoint: true,
                data: [{
                    name: 'Paid shipping',
                    y: <?php include 'sql/shipping_paid_echo.php';?>
                }, {
                    name: 'Free shipping',
                    y: <?php include 'sql/shipping_free_echo.php';?>,
                }]
            }]
        });
    </script>