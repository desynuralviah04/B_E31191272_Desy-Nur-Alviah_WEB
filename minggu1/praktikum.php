<?php

class Car{
	
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	public function hello()
	{
		return "beep";
	}
}

$bmw = new Car();
$mercedes = new Car ();

echo $bmw -> color;
echo "<br />";
echo $mercedes -> color;
echo "<br />";

$bmw -> color = 'blue';
$bmw -> comp = 'BMW';
$mercedes -> comp = "Marcendes Benz";

echo $bmw -> color;
echo "<br />";
echo $mercedes -> color;
echo "<br />";
echo $bmw -> comp;
echo "<br />";
echo $mercedes -> comp;
echo "<br />";

echo $bmw -> hello();
echo "<br />";
echo $mercedes -> hello();

?>