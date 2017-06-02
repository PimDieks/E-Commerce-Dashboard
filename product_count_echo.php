<?php
	include 'conn_database.php';

	$sql = "SELECT post_title, CAST(meta_value as DECIMAL(9,2)) _meta_value
			FROM wp_postmeta, wp_posts
			WHERE wp_posts.ID = wp_postmeta.post_id
			AND post_status = 'publish'
			AND post_type = 'product'
			AND meta_key = '_price'
			ORDER BY post_title ASC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // Output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "[" . $row['_meta_value'] . ",],";
	    }
	} else {
	    echo "0 results";
	}
?>