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

    // Page Dashboards
    function dashboards() {
        echo "<h1>E-Commerce Dashboards</h1>";
        echo "<p>Control your business with management dashboards</p>";
    }