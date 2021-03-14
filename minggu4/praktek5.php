<?php
class Car {
	public function hello()
	{
		return "beep";
	}
}
class SportsCar extends Car {
	public function hello()
	{
		return "hello";
	}
}
$sportsCar = new SportsCar();

echo $sportsCar -> hello();

?>