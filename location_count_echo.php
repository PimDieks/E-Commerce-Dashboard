<?php
	include 'conn_database.php';

	$sql = "SELECT meta_value, COUNT(*) as Aantal
			FROM wp_postmeta
			WHERE meta_key = '_billing_city'
			GROUP BY meta_value
			ORDER BY Aantal DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // Output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "[" . $row['Aantal'] . ",],";
	    }
	} else {
	    echo "0 results";
	}
?>