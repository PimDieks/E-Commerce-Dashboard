<?php
  function products() {
    echo "<h1>Products</h1>";
    echo "<p>Overview of current products and prices</p>";

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
      table.draw(data, {showRowNumber: false, width: '50%', height: '100%'});
    }
    </script>

<?php
      $conn->close();
      echo "<div id='table_div'></div>";
  }
?>