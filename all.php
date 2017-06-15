<?php
  function all() {
    echo "<h1>All</h1>";

?>

<style type="text/css">
    
	.chart {
	    height: 500px;
	    width: 47%;
	    margin: 1.5%;
	    float: left;
	}

	.chart-product {
		height: 500px;
	    width: 96%;
	    margin: 1.5%;
	    float: left;
	}

	.spacer {
	    height: 20px;
	}

</style>

<?php include 'products.php';?>

<?php include 'location.php';?>

<div class="spacer"></div>

<?php include 'shipping.php';?>

<div class="spacer"></div>

<?php include 'payment.php';

}
?>