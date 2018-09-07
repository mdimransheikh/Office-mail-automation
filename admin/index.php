<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<?php
	        		$query = "SELECT * FROM tbl_user WHERE occupation='student'";
					$result = $db->select($query);
					if($result != false){
						$value = mysqli_fetch_array($result);
						$row = mysqli_num_rows($result);
				?>
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $row; ?></strong></h5>
                      <span>Total Students</span>
                    </div>
                </div>
                <?php } ?>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<?php
	        		$query = "SELECT * FROM tbl_user WHERE occupation='teacher'";
					$result = $db->select($query);
					if($result != false){
						$value = mysqli_fetch_array($result);
						$row = mysqli_num_rows($result);
				?>
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $row; ?></strong></h5>
                      <span>Total Teachers</span>
                    </div>
                </div>
                <?php } ?>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<?php
	        		$query = "SELECT * FROM tbl_user WHERE occupation='stuff'";
					$result = $db->select($query);
					if($result != false){
						$value = mysqli_fetch_array($result);
						$row = mysqli_num_rows($result);
				?>
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $row; ?></strong></h5>
                      <span>Total Stuff</span>
                    </div>
                </div>
                <?php } ?>
        	</div>
        	<div class="col-md-3 widget">
        		<?php
	        		$query = "SELECT * FROM tbl_user";
					$result = $db->select($query);
					if($result != false){
						$value = mysqli_fetch_array($result);
						$row = mysqli_num_rows($result);
				?>
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $row; ?></strong></h5>
                      <span>Total registered</span>
                    </div>
                </div>
                <?php } ?>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
      
	  <div class="span_11">
		<div class="col-md-6 col_4">
		  <div class="map_container"><div id="vmap" style="width: 100%; height: 400px;"></div></div>
		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
		<div class="col-md-6 col_5">
		  <div id="chart_container">
		   <div id="chart"></div>
	       <div id="slider"></div>
<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: 'multi',
	
	dotSize: 5,
	series: [
		{
			name: 'temperature',
			data: seriesData.shift(),
			color: '#AFE9FF',
			renderer: 'stack'
		}, {
			name: 'heat index',
			data: seriesData.shift(),
			color: '#FFCAC0',
			renderer: 'stack'
		}, {
			name: 'dewpoint',
			data: seriesData.shift(),
			color: '#555',
			renderer: 'scatterplot'
		}, {
			name: 'pop',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: '#555',
			renderer: 'bar'
		}, {
			name: 'humidity',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: 'line',
			color: '#ef553a'
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
</div>
	      <!-- map -->
<link href="css/jqvmap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.vmap.js"></script>
<script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>


       
<?php include 'inc/footer.php'; ?>