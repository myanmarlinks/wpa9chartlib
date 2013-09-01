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
 
 $element = 'testdiv';
 $data = array(
 	array('year' => '2008', 'view' => 30),
 	array('year' => '2009', 'view' => 10),
 	array('year' => '2010', 'view' => 5),
 	array('year' => '2011', 'view' => 15),
 	array('year' => '2012', 'view' => 40),
 	array('year' => '2013', 'view' => 10),
 	);
 $xkey = 'year';
 $ykey = 'view';
 $label = 'View';
 $chartWidth = '500px';
 $chartHeight = '300px';

 $nextchart = new Chart($element, $data, $xkey, $ykey, $label, $chartWidth, $chartHeight);

 $element = "mynextdiv";
 $data = array(
 	array('year' => '2010', 'view' => 45),
 	array('year' => '2011', 'view' => 35),
 	array('year' => '2012', 'view' => 20),
 	array('year' => '2013', 'view' => 50),
 	);
$xkey = 'year';
$ykey = 'view';
$label = 'View';
$chartWidth = '400px';
$chartHeight = '200px';

$anotherchart = new Chart($element, $data, $xkey, $ykey, $label, $chartWidth, $chartHeight);

$element = "mynewdiv";
$data = array(
	array('year' => '2001', 'view' => 34),
	array('year' => '2002', 'view' => 45),
	array('year' => '2003', 'view' => 55),
	array('year' => '2004', 'view' => 65),
	);
$xkey = 'year';
$ykey = 'view';
$lable = 'Views';
$chartWidth = '500px';
$chartHeight = '250px';

$gochart = new Chart($element, $data, $xkey, $ykey, $label, $chartWidth, $chartHeight);
 
 $element = "chart1";
 $data = array(
	array('month' => '1', 'view' => 34),
	array('month' => '2', 'view' => 45),
	array('month' => '3', 'view' => 55),
	array('month' => '4', 'view' => 65),
	);
 $xkey = 'month';
 $ykey = 'view';
 $label = "Student";
 $chartWidth = '500px';
 $chartHeight = '300px';

 $chart1 = new Chart($element, $data, $xkey, $ykey, $label, $chartWidth, $chartHeight);
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
			<?php echo $nextchart->render(); ?>
			<?php echo $anotherchart->render(); ?>
			<?php echo $gochart->render(); ?>
			<?php echo $chart1->render(); ?>
		</div>
	</div>
</body>
</html>