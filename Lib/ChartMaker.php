<?php 
namespace ChartMaker;

class Chart {
	/*
	@string $element -> pick div id
	@array $data -> pick chart data
	@string $xkey -> pick x-axis data
	@string $ykey -> pick y-axis data
	@string $label -> pick Label for data
	*/
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

 ?>