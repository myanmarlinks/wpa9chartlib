<?php 
	require_once __DIR__ . '/app/Lib/ChartLibrary.php';

	use ChartLibary\Donut;
	use ChartLibary\BarLineArea as Chart;
	
	$element = 'mydiv';
	$data = array(
		array('year' => '2008', 'value' => 50),
		array('year' => '2009', 'value' => 40),
		array('year' => '2010', 'value' => 30),
		array('year' => '2011', 'value' => 60),
		);
	$xkey = 'year';
	$ykeys = array('value');
	$labels = array('Values');

	$chart = new Chart($element, $data, '500px', '300px' ,$xkey, $ykeys, $labels);

	$delement = 'mydnut';
	$ddata = array(
		array('label' => 'eat', 'value' => 40),
		array('label' => 'sleep', 'value' => 30),
		array('label' => 'run', 'value' => 30)
		);
	$donut = new Donut($delement, $ddata, '600px', '300px');
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
			<?php echo $chart->render(3); ?>
			<?php echo $donut->render(); ?>	
		</div>
	</div>
</body>
</html>