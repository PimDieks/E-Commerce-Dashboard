<?php
	include 'conn_database.php';

	$sql = "SELECT DISTINCT meta_value
			FROM wp_postmeta
			WHERE meta_key = '_billing_city'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // Output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "['" . $row['meta_value'] . "',],";
	    }
	} else {
	    echo "0 results";
	}
?>