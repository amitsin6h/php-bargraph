
<!--gionee fetch data-->
	<?php 
	include_once 'db_connect.php';
	
	$result = mysqli_query($dbcon, "SELECT * FROM gionee, micromax, samsung WHERE gionee.year = micromax.year ");
	
	while($row = mysqli_fetch_array($result)){
		$g_year = $row['year'];
		$g_sale = $row['sale'];
		$m_sale = $row['m_sale'];
		$s_sale = $row['samsung_sale'];
		
		$x_p = "['$g_year', '$g_sale','$m_sale', '$s_sale'],";
		echo $x_p;
	}
	
?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	

<script type="text/javascript">
	<?php
	include_once 'db_connect.php';
	$result = mysqli_query($dbcon, "SELECT * FROM gionee, micromax WHERE gionee.year = micromax.year ");
	$graph_data = "";
	while($row = mysqli_fetch_array($result)){
		$year = $row['year'];
		$g_sale = $row['sale'];
		$m_sale = $row['m_sale'];
		
		$graph_data .= "['$year', $g_sale, $m_sale],";
	}
	
	?>
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Gionee', 'Micromax'],
	  <?php echo $graph_data;  ?>
          
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, options);
      }
    </script>

  </head>
  <body>
  <p>Data being printed in google chart format</p>
  <p><?php echo $graph_data;  ?></p>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>


