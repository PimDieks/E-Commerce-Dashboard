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

// Add Menu
function addMenu() {
	add_menu_page("Dashboards", "Dashboards", 4, "dashboards", "dashboards", "dashicons-screenoptions");
	add_submenu_page("dashboards", "Settings", "Settings", 4, "settings", "settings");
}
add_action("admin_menu", "addMenu");

// Page Dashboards
function dashboards() {
	echo "<h1>E-Commerce Dashboards</h1>";
	echo "<p>Welcome to E-Commerce Dashboards. Your all-in-one dashboard plugin!</p>";
}

// Page Settings
function settings() {
	echo "<h1>Settings</h1>";
	echo "<p>Select the dashboards you want to see in your overview.</p>";
	echo "<form>
			<label><input type='checkbox' name='product-overview'>Product Overview</label><br><br>
			<label><input type='checkbox' name='customer-overview'>Customer Overview</label><br><br>
			<input type='submit' name='submit' value='Save' class='button button-primary button-large'>
		</form>";
}