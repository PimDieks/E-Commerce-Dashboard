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

// Add Menź
function addMenu() {
	add_menu_page("Dashboards", "Dashboards", 4, "dashboards", "dashboards", "dashicons-screenoptions");
	add_submenu_page("dashboards", "Settings", "Settings", 4, "settings", "settings");
}
add_action("admin_menu", "addMenu");

// Page Dashboards
function dashboards() {
	echo "<h1>E-Commerce Dashboards</h1>";
	echo "<p>Welcome to E-Commerce Dashboards. Your all-in-one dashboard plugin!</p>";


 ?>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Product');
        data.addColumn('number', 'Price');
        data.addRows([
          <?php include 'product_echo.php';?>
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

<<<<<<< Updated upstream
        table.draw(data, {showRowNumber: false, width: '30%', height: '30%'});
=======
        table.draw(data, {showRowNumber: true, width: '50%', height: '100%'});
>>>>>>> Stashed changes
      }
    </script>

<?php

    $conn->close();
    echo "<div id='table_div'></div>";
	
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

// Add theme info box into WP Dashboard
function insideweb_add_dashboard_widgets() {
	wp_add_dashboard_widget('wp_dashboard_widget', 'Products', 'insideweb_theme_info');
}

add_action('wp_dashboard_setup', 'insideweb_add_dashboard_widgets' );

function insideweb_theme_info() { ?>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Product');
        data.addRows([
          <?php include 'product_echo.php';?>
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '30%'});
      }
    </script>

    <?php
    
    $conn->close();
	  echo "<div id='table_div'></div>";
}
