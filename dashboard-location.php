<?php
	// Add dashboard widget location
	function oi_dashboard_location() {
		wp_add_dashboard_widget('wp_dashboard_widget', 'Location', 'oi_location');
	}
	add_action('wp_dashboard_setup', 'oi_dashboard_location' );

	function oi_location() { ?>
		<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/highcharts.js"></script>
		<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/modules/exporting.js"></script>

		<div id="container" style="min-width: 310px; max-width: 100%; height: 100%; margin-right:2%;"></div>

		<script type="text/javascript">
		    Highcharts.chart('container', {
		        chart: {
		            type: 'column'
		        },
		        title: {
		            text: 'Overview of customer location'
		        },
		        subtitle: {
		            text: ''
		        },
		        xAxis: {
		            categories: [<?php include 'location_echo.php';?>],
		            crosshair: true
		        },
		        yAxis: {
		            min: 0,
		            title: {
		                text: 'Number of customers'
		            }
		        },
		        tooltip: {
		            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		                '<td style="padding:0"><b>{point.y:.1f} Number of customers</b></td></tr>',
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
		            name: 'Number of customers',
		            data: [<?php include 'location_count_echo.php';?>]
		        }]
		    });
		</script>
<?php
	}
?>