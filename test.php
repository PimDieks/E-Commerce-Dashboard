<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="//golden-layout.com/files/latest/js/goldenlayout.min.js"></script>
<link type="text/css" rel="stylesheet" href="//golden-layout.com/files/latest/css/goldenlayout-base.css" />
<link type="text/css" rel="stylesheet" href="//golden-layout.com/files/latest/css/goldenlayout-dark-theme.css" />

<script src="highcharts/code/highcharts.js"></script>
<script src="highcharts/code/modules/exporting.js"></script>


<div id="wrapper">
  <ul id="menuContainer"></ul>
  <div id="layoutContainer"></div>
</div>

<style type="text/css">
	h2{
  font: 14px Arial, sans-serif;
  color:#fff;
  padding: 10px;
  text-align: center;
}

html, body{
  height: 100%;
}

*{
  margin: 0;
  padding: 0;
  list-style-type:none;
}

.chart {
    height: 100%;
    width: 100%;
    margin: 1.5%;
    float: left;
}

#wrapper{
  height: 100%;
  position: relative;
  width: 100%;
  overflow: hidden;
}

#menuContainer{
  width: 20%;
  height: 100%;
  position:absolute;
  top: 0;
  left: 0;
  background: #222;
}

#menuContainer li{
  cursor: move;
  border-bottom: 1px solid #000;
  border-top: 1px solid #333;
  cursor: pointer;
  padding: 10px 5px;
  color: #BBB;
  background: #1a1a1a;
  font: 12px Arial, sans-serif;
}

#menuContainer li:hover{
  background: #111;
  color: #CCC;
}

#layoutContainer{
  width: 80%;
  height: 100%;
  position:absolute;
  top: 0;
  left: 20%;
  box-shadow: -3px 0px 9px 0px rgba( 0, 0, 0, 0.4 );
}
</style>

<script type="text/javascript">

	var config = {
    content: [{
        type: 'row',
        content: [{
            type:'component',
            componentName: 'example',
            componentState: { text: 'Component 1' }
        },
        {
            type:'component',
            componentName: 'example',
            componentState: { text: 'Component 2' }
        }]
    }]
};

var myLayout = new window.GoldenLayout( config, $('#layoutContainer') );

myLayout.registerComponent( 'example', function( container, state ){
    container.getElement().html( state.text );
});

myLayout.init();
myLayout.on('componentCreated', function(component){
  console.log(component);

  Highcharts.chart('products', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Overview of stock and the product price'
            },
            colors: ['#C85A62','#545E8F','#687DBD','#80A5DD','#AFBDE7',],
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [<?php include 'sql/product_echo.php';?>],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Price in euro',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                },
                series: {
                    pointPadding: 0, // Defaults to 0.1
                    groupPadding: 0.01 // Defaults to 0.2
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Product prices',
                data: [<?php include 'sql/product_count_echo.php';?>],
            },{
                name: 'Amount of stock',
                data: [<?php include 'sql/product_stock_echo.php';?>],
            }]
        });

});




var addMenuItem = function( title, text ) {
    var element = $( '<li>' + text + '</li>' );
    $( '#menuContainer' ).append( element );

   var newItemConfig = {
        title: title,
        type: 'component',
        componentName: 'example',
        componentState: { text: '<div id="products" class="chart"></div>' }
    };
  
    myLayout.createDragSource( element, newItemConfig );
};

addMenuItem( 'Add me!', 'You\'ve added me!' );
addMenuItem( 'Me too!', 'You\'ve added me too!' );
       
    </script>
