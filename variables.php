<!DOCTYPE html>
<html>
<head>
	<title>PHP Variables Lesson</title>
</head>
<body>
	<?php
		echo "<h2>I am Awesome</h2>";
		echo"<br>";
		echo "<h2>These are the PHP Variables</h2>";
		echo"<br />";
		echo"Yeah";
		echo"<br>";

		//This  is  a single line comment.
		/*This is a multiline coment */ 

		// Variable Rules
		// Variables must never have spaces
		// A Variable must start with a dollar sign$
		// A variable must start with either a letter or an _ (underscore)... Example

		// $Myvariable;
		// $_myvariable;

		// A variable cannot start with a number eg.( $4566) instead you can 
		// $_1234;
		// A variable cannot start with any special character except the _(underscore) 
		// Variable names are case sensitive 
		// $a; 
		// $A;
		// The above arevery different

		// echo phpinfo(); this  is how to check php version you are using 

		echo"<h2>PHP Data types</h2>";
		$string = "A string is anything inside double or single quotation marks";
		echo"$string";
		$string = "123456789 is a string as well";
		echo"<br>";
		$name = "Imelda";
		echo "$name";
		echo "<br>";
		$name = "Wairimu";
		echo "$name";
		echo "<br>";
		$integer = 123;
		$integer2 = 456;
		echo "first integer " . $integer ." second  number is " . $integer2;
		echo "<br>";
		$sum = 20 + 40;
		echo "$sum";
		echo "<br>";
		$divide = $sum / 2;
		echo "$divide";

		echo "<br>";
		$double = 12.34;
		$double2 = 56.78;
		// double is used for numbers with decimal points
		$sumdouble = $double + $double2;
		echo "$sumdouble";


		echo "<br>";
		$integer = 2017;
		$integer2 = 1992;
		$age = $integer - $integer2;
		echo "I am " . $age ." years old.";
		//  two ways of naming php variables 
		// $yearBorn or
		// $year_born
		
		echo "<br>";
		$boolean = true;
		$boolean2 = false;

		$married = false;
		if($married){
			echo "Congratulations  and good luck";
		}
		$engageded = true;
		if($engageded){
			echo "Congratulations, well in.";
		}

		$num1 = 200;
		$num2 = 30;
		if($num1 > $num2){
			echo "Num1 is greater than num2";
		}

		echo "<br>";
		// array
		$array1 = array(10, 20, 30, 40, 50, 60);
		$array2 = ["val1" , 60, 400, false, true, 80.30];

		echo $array1[1];
		// php you start counting from 0
		echo "<br>";
		echo $array1[2];
		echo "<br>";
		echo $array2[2];
		$mixedarray = ["Kenya", "Nairobi", 47, "Mike Sonko"];
		//  Ilive in Kenya which has 47 counties. 
		// My county si Nairobi and my gorvernor is Mike Sonko.

		echo "<br>";
		echo "I live in " . $mixedarray[0] ." which has " . $mixedarray[2] ." counties.";
		echo "<br>";
		echo "My county is " . $mixedarray[1] ." and my governor is " . $mixedarray[3] . ".";

		echo "<br>";
		// a constant variable, meaning it cant be reassigned
		// $weather = rainy;
		define("ID", "28563396338976");
		echo ID;







	 ?>
</body>
</html>