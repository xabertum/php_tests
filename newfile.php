
<?php

$x = 5; //global scope

function myTest() {
	//Using x inside this function will generate an error
	echo "Variable x inside function is: $x";
			
}

myTest();

echo "Variable outside function is $x";


?>

