<?php
	include 'conn_database.php';

	$sql = "SELECT post_title, meta_value
			FROM wp_postmeta, wp_posts
			WHERE wp_posts.ID = wp_postmeta.post_id
			AND post_status = 'publish'
			AND post_type = 'product'
			AND meta_key = '_price'
			ORDER BY post_title";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // Output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "['" . $row['post_title'] . "',  {f:'" . "€" . $row['meta_value'] . "'},],";
	    }
	} else {
	    echo "0 results";
	}
?>