<?php 
class myArray
{
	protected $test = array(
	array( 'id' => 0, 'name' => 'Thiha', 
			'address' => 'Hledan' ),
	array( 'id'		=> 1, 'name'		=> 'Aung',
		'address'	=> 'Pyay' ),
	);

	public function getArray() {
		return $this->test;
	}

	public static function getStaticArray() {
		$country_list = array('American', 'Paris');
		return $country_list;
	}
}

var_dump(myArray::getStaticArray());
$arr = new myArray;
var_dump($arr->getArray());
?>