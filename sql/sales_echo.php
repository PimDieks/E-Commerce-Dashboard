<?php
	include 'conn_database.php';

	$sql = "SELECT order_item_name, COUNT(*) as Aantal
			FROM wp_woocommerce_order_items
			WHERE order_item_type = 'line_item'
			GROUP BY order_item_name
			ORDER BY Aantal DESC
			LIMIT 5";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // Output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "['" . $row['order_item_name'] . "',],";
	    }
	} else {
	    echo "0 results";
	}
?>