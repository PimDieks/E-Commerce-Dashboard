<?php
/**
 * Plugin Name: E-commerce Dashboards
 * Plugin URI: 
 * Description: Manage your e-commerce with management dashboards.
 * Version: 0.1.1
 * Author: Jarno Peeters & Pim Dieks
 * Author URI:
 * License: GPL2
 */

// Add Page
add_action("admin_menu", "addMenu");
function addMenu() {
	add_menu_page("Dashboards", "Dashboards", 4, "dashboards", "dashboards");
	add_submenu_page("Settings", "Settings", "Settings", 4, "settings", "settings");
}

function dashboards() {
	echo "<h1 class='wp-heading-inline'>E-Commerce Dashboards</h1>";
}

function settings() {
	echo "Settings";
}