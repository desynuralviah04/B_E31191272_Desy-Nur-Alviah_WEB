<?php

class Car {

	public $model;
	public function getModel()
	{
		return "The car model is " . $this -> model;
	}
}
$mercendes = new Car ();
$mercendes -> model = "Mercendes benz";
echo $mercendes -> getModel();

?>