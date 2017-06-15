<?php
	include 'conn_database.php';

	$sql = "SELECT COUNT(*) as Aantal
			FROM wp_postmeta
			WHERE meta_key = '_payment_method_title'
			AND meta_value = 'iDEAL'";
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