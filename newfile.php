
<?php

class Car {
	function Car() {
		$this->model = "BMW";		
	}
}

//Create an object
$herbie = new Car();

//Show object propierties
echo $herbie->model;

//Define constant
define("GRETTING", "Welcome!");

echo GRETTING;

//Define another constant
define("HOLAMUNDO", "Hello world!", true);
echo holamundo;

?>

