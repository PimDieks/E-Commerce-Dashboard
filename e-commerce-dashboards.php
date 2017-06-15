<?php
    /**
      * Plugin Name: E-Commerce Dashboards
      * Plugin URI: 
      * Description: Control your business with management dashboards.
      * Version: 0.1.1
      * Author: Jarno Peeters & Pim Dieks
      * Author URI:
      * License: GPL2
    */

    // Add Menu
    function addMenu() {
      add_menu_page("Dashboards", "E-Commerce", 4, "dashboards", "dashboards", "dashicons-screenoptions", 2);
    }
    add_action("admin_menu", "addMenu");

    // WP Dashboards Chart
    include 'wp-dashboard.php';


  function dashboards() {
    echo "<h1>E-commerce Dashboards</h1>";

?>

  <style type="text/css">
      
    .chart {
        height: 500px;
        width: 46%;
        margin: 1.5%;
        float: left;
    }

    .chart-product {
      height: 500px;
        width: 93.8%;
        margin: 1.5%;
        float: left;
    }

    .spacer {
        height: 20px;
    }

  </style>

  <?php include 'products.php';?>

  <?php include 'location.php';?>

  <div class="spacer"></div>

  <?php include 'shipping.php';?>

  <div class="spacer"></div>

  <?php include 'payment.php';

  }
?>