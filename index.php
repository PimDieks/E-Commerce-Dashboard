<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="//golden-layout.com/files/latest/js/goldenlayout.min.js"></script>
<link type="text/css" rel="stylesheet" href="//golden-layout.com/files/latest/css/goldenlayout-base.css" />
<link type="text/css" rel="stylesheet" href="//golden-layout.com/files/latest/css/goldenlayout-light-theme.css" />

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
	  background: #e1e1e1;
	}

	#menuContainer li{
	  border-bottom: 1px solid #ccc;
	  border-top: 1px solid #ccc;
	  cursor: pointer;
	  padding: 10px 5px;
	  color: #fff;
	  background: #e1e1e1;
	  font: 12px Arial, sans-serif;
	}

	#menuContainer li:hover{
	  background: #e1e1e1;
	  color: #fff;
	}

	#layoutContainer{
	  width: 100%;
	  height: 100%;
	  position:absolute;
	  top: 0;
	  left: 20%;

</style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

<div id="wrapper">
  <ul id="menuContainer"></ul>
  <div id="layoutContainer"></div>
</div>

<script type="text/javascript">
	
	var config = {
	    content: [{
	        type: 'row',
	        isClosable: false,
	        content: [{
	            type:'component',
	            componentName: 'example',
	            componentState: { text: '<div id="donutchart" style="width: 100vh; height: 100vh;"></div>' }
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
	    container.getElement().html( '<h2>' + state.text + '</h2>');
	});

	myLayout.init();

	var addMenuItem = function( title, text ) {
	    var element = $( '<li>' + text + '</li>' );
	    $( '#menuContainer' ).append( element );

	    var newItemConfig = {
	        title: title,
	        type: 'component',
	        componentName: 'example',
	        componentState: { text: text }
	    };
	  
	    element.click(function(){
	        myLayout.root.contentItems[ 0 ].addChild( newItemConfig );
	    });
	};

	addMenuItem( 'Add me!', 'You\'ve added me!' );
	addMenuItem( 'Me too!', 'You\'ve added me too!' );
	addMenuItem( 'Me toooooo!', 'You\'ve added me tooooooooo!' );

	$(window).resize(function(){
		drawChart();
	});


</script>