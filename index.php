<?php 

require_once __DIR__ . "/Lib/ChartMaker.php";

use ChartMaker\Chart;
$element = 'chart';
$data = array(
	array('y' => '2006', 'a' => 100, "b" => 70 ),
	array('y' => '2007', 'a' => 76, "b" => 60 ),
	array('y' => '2008', 'a' => 34, "b" => 50 ),
	array('y' => '2009', 'a' => 50, "b" => 40 ),
	array('y' => '2010', 'a' => 23, "b" => 30 ),
	array('y' => '2011', 'a' => 1, "b" => 20 ),
	array('y' => '2012', 'a' => 5, "b" => 10 ),
	);
$xkey = 'y';
$ykeys = array('a', 'b');
$labels = array('A', 'B');
$chartWidth = '600px';
$chartHeight = '300px';
$chart = new Chart(
		$element, $data, $xkey, 
		$ykeys, $labels, $chartWidth, $chartHeight
		);

$element = 'donut';
$dodata = array(
	array('label' => 'eat', 'value' => 5),
	array('label' => 'sleep', 'value' => 8),
	array('label' => 'run', 'value' => 1)
	);

$donut = new Chart(
	$element, $dodata
	);
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
			<?php echo $chart->render(); ?>
			<?php echo $chart->render(1); ?>
			<?php echo $chart->render(2); ?>
			<?php echo $chart->render(3); ?>
			<?php echo $donut->render(4); ?>
		</div>
	</div>
</body>
</html>