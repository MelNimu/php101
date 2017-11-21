<!DOCTYPE html>
<html>
<head>
	<title>Conditional Statements</title>
</head>
<body>
	<?php 
		// Conditional statementsare used to perform different actions based on different conditions
		/* conditional ifwhich only runs if the  condition is true 
		if(condition to be checked){
			code to be executed if  condition is true
		}
		*/
		echo "<h2>Conditional is</h2>";
		$a = 712;
		$b = 600;
		if ($a > $b) {
			echo "a is greater than b";
		}

		// Real life example
		echo "<br>";
		// For example welcoming only the new users to a site.
		$new_user = true;
		if ($new_user) {
			echo "<h3> Karibu Sana </h3>";
			echo "<p>Glad you stopped by</p>";
		}

		// Don't divide by zero
		$numerator = 1000;
		$denominator = 20;
		if ($denominator > 0) {
			echo"Result is " . $result = $numerator / $denominator;
		}

		// if else statement
		echo "<h2>if-else statement</h2>";
		/* if - else syntax, 
		code will run if condition is true but if it is false the else block works or is run
		if(condition){
		code  will run, if not goes to else.
		} else{
			code will run if false
		}

		 */

		$c = 300;
		$d = 904;
		if ($c > $d) {
			echo "c is greater than d";
		} else {
			echo "c is not greater than d";
		}

		echo "<br>";
		$numerator = 1000;
		$denominator = 0;
		if ($denominator > 0) {
			echo"Result is " . $result = $numerator / $denominator;
		} else {
			echo "denominator has to be greater than 0";
		}

		echo "<h2> if else-if conditions</h2>";
		/* syntax 
			if(condition){
				code will be run if true
			}elseif(condition2){
				this code is executed
			}esleif(condition3){
				this code is  executed
			}else{
				do this i.e if none of the above is true
			}

		*/
		
		$g = 10;
		$h = 10;
		if ($g > $h) {
			echo "g is greater than h";
		} elseif ($g < $h){
			echo "g is less than h";
		} else {
			echo "g is equal to h";
		}
		echo "<br>";

		// school grading system
		$marks ="y" ;
		if ($marks > 0 && $marks <= 29) {
			echo "you have failed<br>";
		} elseif ($marks > 29 && $marks <= 50) {
			echo "you are just above average<br>";
		} elseif ($marks >= 51 && $marks <= 70) {
			echo "you have passed, well done<br>";
		} elseif ($marks >=71 && $marks <= 100) {
			echo "You are an exemplary student,colect a gift<br>";
		}
		else {
			echo "are you sure you took the test?";
		}
		echo "<hr>";
		$newCurrentTime = date("m");
		$newCurrentTime1 = date("h : m a");

		echo "time now is " . $newCurrentTime1;
		// class activity
		echo "<hr>";
		$currentMonth = date("M");
			echo $currentMonth;
		$currentYear = date("Y");
			echo $currentYear;
		echo "<br>";
		$currentTime = date("F");

		if ($currentTime == "August") {
			echo "It is August, so it is really hot";
		} else {
			echo "It is not August so not at the peak of heat";
		}
	 ?>
</body>
</html>

<!-- write a script thatgets the current month and orint one of the following
if it is august print "it is august so it is really hot"
if it is not august , then print it is month so at least not in the peak of heat  -->
