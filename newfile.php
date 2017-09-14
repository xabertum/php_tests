
<?php

$x = 5; //global scope

function myTest() {
	//Using x inside this function will generate an error
	$y = "Inside function variable";
	echo "Variable x inside function is: $y";
			
}

myTest();

echo "Variable outside function is $x";


?>

