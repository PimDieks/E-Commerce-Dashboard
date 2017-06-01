<?php
<<<<<<< Updated upstream
	function dashboards() {
		echo "<h1>E-Commerce Dashboards</h1>";
		echo "<p>Control your business with management dashboards</p>";
	
?>

<link rel="stylesheet" type="text/css" href="../wp-content/plugins/E-Commerce-Dashboard/golden-layout.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="//golden-layout.com/files/latest/js/goldenlayout.min.js"></script>
<link type="text/css" rel="stylesheet" href="//golden-layout.com/files/latest/css/goldenlayout-base.css" />
<link type="text/css" rel="stylesheet" href="//golden-layout.com/files/latest/css/goldenlayout-dark-theme.css" />

<div id="wrapper">
	<ul id="menuContainer"></ul>
	<div id="layoutContainer"></div>
</div>

<style>
	
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
	  
	    myLayout.createDragSource( element, newItemConfig );
	};

	addMenuItem( 'Add me!', 'You\'ve added me!' );
	addMenuItem( 'Me too!', 'You\'ve added me too!' );

</script>
<?php } ?>
=======
  function dashboards() {
    echo "<h1>Location</h1>";
    echo "";

?>

<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/highcharts.js"></script>
<script src="../wp-content/plugins/E-Commerce-Dashboard/highcharts/code/modules/exporting.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="//golden-layout.com/assets/js/goldenlayout.min.js"></script>
<link type="text/css" rel="stylesheet" href="//golden-layout.com/assets/css/goldenlayout-base.css" />
<link type="text/css" rel="stylesheet" href="//golden-layout.com/assets/css/goldenlayout-light-theme.css" />

<script type="text/javascript">
    
    var config = {
    content: [{
        type: 'row',
      content:[{
        type: 'stack',
        width: 60,
        content:[{
              type: 'component',
              componentName: 'testComponent',
              title:'Component 1'
          },{
              type: 'component',
              componentName: 'testComponent',
              title:'Component 2'
          }]
      },{
            type: 'column',
            content:[{
                type: 'component',
                componentName: 'testComponent'
            },{
                type: 'component',
                componentName: 'testComponent'
            }]
        }]
    }]
};

var myLayout = new GoldenLayout( config );

myLayout.registerComponent( 'testComponent', function(){});

myLayout.init();
    
</script>

<?php
}
?>
>>>>>>> Stashed changes
