<?php 
require_once __DIR__ . '/Lib/ChartMaker.php';

use ChartMaker\Chart;
$element = 'mydiv';
$data = array(
		array('date' => '2013-08-12', 'view' => 11),
		array('date' => '2013-08-13', 'view' => 7),
		array('date' => '2013-08-14', 'view' => 21),
		array('date' => '2013-08-15', 'view' => 34),
		array('date' => '2013-08-16', 'view' => 18),
		array('date' => '2013-08-17', 'view' => 9),
	);
$xkey = "date";
$ykey = "view";
$label = "View";
$chartWidth = '600px';
$chartHeight = '300px';

$chart = new Chart($element, $data, $xkey, $ykey, $label, $chartWidth, $chartHeight);
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chart Test</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/morris.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/raphael-min.js"></script>
	<script src="js/morris.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div id="myfirstchart" style="height: 250px;">
			</div>	
			<?php echo $chart->render(); ?>
		</div>
	</div>
	
	<!-- 
	div#container>div#header+div#content+div#footer
	ul#nav>li*6>a	
	-->
	<script>
		new Morris.Line({
  			element: 'myfirstchart',
			  data: [
    				{ year: '2008', value: 20 },
    				{ year: '2009', value: 10 },
    				{ year: '2010', value: 5 },
				    { year: '2011', value: 5 },
    				{ year: '2012', value: 20 }
  				],
			xkey: 'year',
  			ykeys: ['value'],
			labels: ['Value']
		});
	</script>
</body>
</html>