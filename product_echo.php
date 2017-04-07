<?php include 'conn_database.php';

$sql = "SELECT post_title 
		FROM wp_posts
		WHERE post_type = 'product'
		AND post_status = 'publish'
		ORDER BY post_title";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "['" . $row['post_title'] . "'],";
    }
} else {
    echo "0 results";
} ?>