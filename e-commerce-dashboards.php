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
    }
    add_action("admin_menu", "addMenu");

    // WP Dashboards Chart
    include 'wp-dashboard.php';
    
    // Page All
    include 'all.php';