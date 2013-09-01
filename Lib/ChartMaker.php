<?php 
namespace ChartMaker;

class Chart {
	protected $type = 'Line';
	protected $element = '';
	protected $data = array();
	protected $xkey = '';
	protected $ykeys = array();
	protected $labels = array();
	protected $chartWidth  = '';
	protected $chartHeight = '';

	public function __construct($element, $data, 
						$xkey = null, 
						$ykeys = null, 
						$labels = null, 
						$chartWidth = '300px', 
						$chartHeight = '300px') {
		$this->element = $element;
		$this->data = $data;
		$this->xkey = $xkey;
		$this->ykeys = $ykeys;
		$this->labels = $labels;
		$this->chartWidth = $chartWidth;
		$this->chartHeight = $chartHeight;
	}

	public function render($type = 0) {
		$jdata = json_encode($this->data);
		$jykeys = json_encode($this->ykeys);
		$jlabels = json_encode($this->labels);

		if($type == 0) {
			$charttype = $this->type;
		} elseif ($type == 1) {
			$charttype = 'Line';
		} elseif ($type == 2) {
			$charttype = 'Bar';
		} elseif ($type == 3) {
			$charttype = 'Area';
		} elseif ($type == 4) {
			$charttype = 'Donut';
		}
		if($type == 4) {
			$chart = <<<EOF
			<div id="$this->element-$type" style="height: $this->chartHeight; width: $this->chartWidth">
			</div>
			<script>
				Morris.Donut({
  					element: '$this->element-$type',
					  data: $jdata
				});
			</script>
EOF;
		} else {
			$chart = <<<EOF
			<div id="$this->element-$type" style="height: $this->chartHeight; width: $this->chartWidth">
			</div>
			<script>
				Morris.$charttype({	
	  				element: '$this->element-$type',
				  	data: $jdata,
		  			xkey: '$this->xkey',
		  			ykeys: $jykeys,
					labels: $jlabels
				});
			</script>
EOF;
		}
		
	return $chart;
	}
}


/*
class Line {
	
	protected $element = '';
	protected $data = array();
	protected $xkey = '';
	protected $ykey = '';
	protected $label = '';
	protected $chartWidth = '';
	protected $chartHeight = '';

	public function __construct( $element, $data = array(), $xkey, $ykey, $label, $chartWidth = "400px",$chartHeight = '200px')
	{
		$this->element = $element;
		$this->data = $data;
		$this->xkey = $xkey;
		$this->ykey = $ykey;
		$this->label = $label;
		$this->chartWidth = $chartWidth;
		$this->chartHeight = $chartHeight;
	}

	public function render() {
		$jdata = json_encode($this->data);
		$chartview = <<<EOF
		<div id="$this->element" style="height: $this->chartHeight; width: $this->chartWidth"></div>
		<script>
		new Morris.Line({
  			element: '$this->element',
			  data: $jdata,
			xkey: '$this->xkey',
  			ykeys: ['$this->ykey'],
			labels: ['$this->label']
		});
		</script>
EOF;
	return $chartview;
	}
}
*/
 ?>
	