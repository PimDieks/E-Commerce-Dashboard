<?php
	include 'conn_database.php';

	$sql = "SELECT COUNT(*) as Aantal
			FROM wp_woocommerce_order_items
			WHERE order_item_type = 'Shipping'
			AND order_item_name = 'Gratis bezorging'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // Output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo $row['Aantal'];
	    }
	} else {
	    echo "0 results";
	}
?>