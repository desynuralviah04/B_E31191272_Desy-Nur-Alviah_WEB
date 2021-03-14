<?php
class Car {

	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	public function hello()
	{
		return "Been i am a <i>". $this -> comp . 
		"</i>, and i am <i>" . $this -> color;
	}
}

$bmw = new Car();
$mercendes = new Car();

$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercendes -> comp = 'mercendes Benz';

echo $bmw -> hello();
?>