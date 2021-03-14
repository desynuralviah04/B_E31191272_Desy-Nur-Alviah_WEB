<?php

class Car {

	private $model;
	public function setModel($model)
	{
		$this -> model = $model;
	}
	public function hello()
	{
		return "beep! I am a <i>" . $this -> model . "</i><br />";
	}
}
class SportaCar extends Car{

}
$SportaCar = new SportaCar ();
$SportaCar -> setModel = "Mercendes benz";
echo $SportaCar -> hello();

?>
