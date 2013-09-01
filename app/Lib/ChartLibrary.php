<?php 
namespace ChartLibary;

class Chart {
	protected $element = '';
	protected $data = array();
	protected $type = 'Donut';
	protected $width = '';
	protected $height = '';

	public function __construct($element, $data, $width, $height) {
		$this->element = $element;
		$this->data = $data;
		$this->width = $width;
		$this->height = $height;
	}

	public function getChartType() {
		$type = '';
		switch ($this->type) {
			case 1:
				 $type = 'Line'; break;
			case 2:
				$type = 'Bar'; break;
			case 3:
				$type = 'Area'; break;
			case 4:
				$type = 'Donut'; break;
			default: 
				$type = 'Donut'; break;
		}
		return $type;
	}
}
class BarLineArea extends Chart {
	protected $xkey = '';
	protected $ykeys = array();
	protected $labels = array();

	public function __construct($element, $data, $width, $height, $xkey, $ykeys, $labels) {
		parent::__construct($element, $data, $width, $height);
		$this->xkey = $xkey;
		$this->ykeys = $ykeys;
		$this->labels = $labels;

	}

	public function render($type) {
		$this->type = $type;
		$jdata = json_encode($this->data);
		$jykeys = json_encode($this->ykeys);
		$jlabels = json_encode($this->labels);
		$charttype = $this->getChartType();
		$chart = <<<EOF
			<div id="$this->element-$type" style="height: $this->height; width: $this->width">
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
	return $chart;
	}
}

class Donut extends Chart {
	public function render() {
		$jdata = json_encode($this->data);
		$chart = <<<EOF
			<div id="$this->element" style="height: $this->height; width: $this->width;">
			</div>
			<script>
				Morris.Donut({
  					element: '$this->element',
					  data: $jdata
				});
			</script>
EOF;
		return $chart;
	}
}

 ?>
