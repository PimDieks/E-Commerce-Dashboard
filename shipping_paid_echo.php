<?php
	include 'conn_database.php';

	$sql = "SELECT COUNT(*)
			FROM wp_woocommerce_order_items
			WHERE order_item_type = 'Shipping'
			AND order_item_name = 'Bezorgen'";
	$result = $conn->query($sql);
	echo "[" . $row['Aantal'] . ",],";

	// if ($result->num_rows > 0) {
	//     // Output data of each row
	//     while($row = $result->fetch_assoc()) {
	//         echo "[" . $row['Aantal'] . ",],";
	//     }
	// } else {
	//     echo "0 results";
	// }
?>