<?php
  function all() {
    echo "<h1>All</h1>";

    // Page Products
    include 'products.php';

    // Page Location
    include 'location.php';

    // Page Shipping
    include 'shipping.php';
}
?>