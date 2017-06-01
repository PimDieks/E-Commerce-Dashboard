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
      add_submenu_page("dashboards", "All", "All", 4, "all", "all");
      add_submenu_page("dashboards", "Products", "Products", 4, "products", "products");
      add_submenu_page("dashboards", "Location", "Location", 4, "location", "location");
      add_submenu_page("dashboards", "Shipping", "Shipping", 4, "shipping", "shipping");
    }
    add_action("admin_menu", "addMenu");

    //Page All
    include 'all.php';

    // Page Dashboards
    include 'dashboards.php';

    // Page Products
    include 'products.php';

    // Page Location
    include 'location.php';

    // Page Shipping
    include 'shipping.php';