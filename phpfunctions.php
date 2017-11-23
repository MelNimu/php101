<!DOCTYPE html>
<html>
<head>
	<title>PHP FUNCTIONS!!</title>
</head>
<body>
	<h2>Functions</h2>
	<?php 
		// Definition
		// a  function is a block of statements that can be used repeatedly in a programme or script.
		/* 
		syntax
		function functionName($arguments to be taken, e.g $ag1 , $ag2 , $ag3){
			code to  be executed.
		}

		*/ 

		echo "Function Definition"; 
		function SayHello()
		{
			echo "<h2> Hello World!! </h2>";
		}

		echo "<h3>Calling or invoking a function</h3>";
		SayHello();
		SayHello();
		SayHello();
		SayHello();

		echo "<br>";
		function SayHelloTo($value)
		{
			echo "$value , how are you doing today? <br>";
		}
		SayHelloTo("Mel");
		SayHelloTo("Sam");
		SayHelloTo("Nimo");
		SayHelloTo("Doe");

		echo "<br>";

		$kids = ["Mel" , "Zosi" , "Lunell" , "Sam" , "Doe" , "Kiatu"];
		function sayHi($names)
		{
			if (is_array($names)) {
				foreach ($names as $key) {
					echo "Hi darling , " . $key . "<br>";
				} 
			} else {
					echo "Hi $names";
				}
		}
		
		sayHi($kids);

		echo "<br>";
		function age($jina , $yob)
		{
			$ageNow = 2017 - $yob;
			echo "Ola " . $jina . " you are " . $ageNow . " years old. <br>" ;
		}

		age("Imelda" , 2000);
		age("Doe" , 1820);
		age("Yoh" , 1997);
		age("Imelda" , 2000);

		echo "<br>";
		function BetterHello($greetings , $target , $punctuation)
		{
			echo $greetings . " " . $target . $punctuation . "<br>";
		}

		BetterHello("Uko aje " , "Omwami" , "?");
		$person = "Githeri";
		$yoh = "i am sjhdudijiol.";

		BetterHello("Hi " , $person , $yoh);

		echo "<p> Return function keyword</p>";
		function add($x , $y)
		{
			$sum = $x + $y;
			return $sum;
		}

		echo "The total of the two numbers is " . add(67 ,9807) . "<br>";
		echo "The total of the two numbers is " . add(3579 ,76543321688) . "<br>";

		echo "<p>create two functions, one to calculate area of a square and the other area of a rectangle , and then giv etwo parameters and returns the answer </p>";

		function areaSquare($l )
		{
			$area = pow($l, 2);
			return $area;
		}
		echo "Area of the square is " . areaSquare(3) . "<br>";

		function areaRectangle($l , $w )
		{
			$area = $l * $w;
			return $area;
		}
		echo "Area of the rectangle is " . areaRectangle(3 , 9) . "<br>";

		$mel = "Imelda Wairimu.";
		echo "<p><em>write a function that checks if the curent user is yourself , if it is print , welcome to the screen otherwise print hi starnger.</em></p>";
		function user($currentUser)
		{
			global $mel;
			if ($currentUser == $mel) {
				echo "Welcome back";
			} else{
				echo "Hello stranger";
			}
		}

		user("Imelda Wairimu.");
		echo "<br>";
		user("John Kiatu");

		echo "<hr><p>Function default parameters</p>";
		function greet($name = 'friend' , $timeDay = 'afternoon')
		{
			echo "Hi $name , good $timeDay";
		}
		greet("Susan" , "Evening");
		echo "<br>";
		greet();

		echo "<br>";
		function oneParameter($name = 'Person' , $gender = Null)
		{
			if ($gender) {
				echo "$name is a $gender";
			} else{
				echo "$name , karibu sana.";
			}
		}

		oneParameter();
		echo "<br>";
		oneParameter("John" , "Male");
		echo "<br>";
		oneParameter("Jane");
		
	 ?>
	 <h4>Assignment</h4>
	 <p>create a function that takes in a string, reverses it and  prints the reverse to the browser</p>
	 <?php 
	 	// $string = ["things"];
	 	// function rev($string)
	 	// {
	 	// 	if (is_array($string)) {
	 	// 		echo array_reverse($string);
	 	// 	} else {
	 	// 		echo "things";
	 	// 	}
	 	// }
	 	// rev();
	 function rev($string)
	 {
	 	echo strrev($string);
	 }

	 rev("world");
	 echo "<br>";
	 rev("go away!");
	 echo "<br>";
	 rev("Imelda");
	  ?>

</body>
</html>