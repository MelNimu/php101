<!DOCTYPE html>
<html>
<head>
	<title>PHP LOOPS</title>
</head>
<body>
	<h2>PHP LOOPS!!</h2>
	<?php 
		echo "<h3>While Loop</h3>";
		// loops allow you to repeat a code  block a certainnumber of times so long as a condition is true.
		// a while loop loops through a block of code as  long as the specified condition is true.
		// syntax
			// while(condition){block of code will run if condition is true}

		$counter = 0;
		while ($counter <= 10) {
			echo " Imelda <br>";
			echo "The value of count right now is " . $counter;
			$counter ++;
		}
		echo "The count variable after the loop is done is " . $counter;

		echo "<br>";
		echo "<hr>";

		$even_num = 0;
		while ($even_num <= 20) {
			echo "Even number is $even_num <br>";
			$even_num +=2;
		}
		echo "The  value of num after loop runs is: $even_num ";
		echo "<br>";
		$odd_num = 1;
		while ($odd_num <= 20) {
			echo "Odd number is $odd_num <br>";
			$odd_num ++;
		}
		echo "The  value of num after loop runs is: $odd_num ";

		echo "<br>";
		echo "<hr>";

		$letter = 0;
		while ($letter <= 10) {
			echo "abc ";
			$letter ++;
		}
		echo "<br>";

		$lastl = 0;
		while ($lastl <= 10) {
			echo "xyz ";
			$lastl ++;
		}

		$multiple = 3;
			while ($multiple <= 100) {
				echo "Multiple of 3 $multiple <br>";
				$multiple += 3;
			}
		echo "<br>";
		$multiple_three = 0;
		while ($multiple_three <= 100) {
			if ($multiple_three % 3 == 0) {
				echo "$multiple_three <br>";
			}else{
				echo"$multiple_three is not a multiple of three <br>";
			}
		$multiple_three ++;
		}
	 ?>
	 <h3>For-loop</h3>
	 <?php 
	 	// A for-loop is a compact version of while loop.
	 	/*countervariable
	 	while (condition) {
	 		print something.
	 	}
	 	increment*/

	 	// syntax
	 	// for (counter;condition; increment) { 
	 	// 	code t be run
	 	// }

	 	for ($x=0; $x <= 10 ; $x++) { 
	 		echo "Number is  $x <br>";
	 	}
	 	echo "<br>";
	 	for ($y=20; $y <=40; $y+=2) { 
	 		echo "Even number is $y <br>";
	 	}
	 	echo "<hr>";
	 	// Using a for loop , print out from 50 to 70 if a number is even print this number is even, if number is odd, print number is odd
	 	for ($i=50; $i <=70 ; $i++) { 
	 		if ($i % 2 == 0) {
	 			echo "This is an even number $i <br>";
	 		}else{
	 			echo "$i is an odd number <br>";
	 		}
	 	}

	 	echo "<hr>";
	 	echo "<p>Square for numbers 1 - 12</p>";
	 	for ($s=1; $s <= 12  ; $s++) { 
	 		$square = $s * $s;
	 		echo "$s * $s = $square <br>";
	 	}
	  ?>

	  <p>Assignment</p>
	  <p>Using either a while or forloop, between 0  - 115 , print fizz if a number is a multiple of three, print buzz if a number is a multiple of 5 , print fizzbuzz if number is both a multiple of 3 and 5 else just print out the number..</p>
	  <p>Using a forloop print this to the screen</p>
	  <br># <br> ## <br> ### <br> #### <br> ##### <br> ###### <br> #######
	  <?php 
	  echo "<br>";
	  	for ($i=0; $i <= 115 ; $i++) { 
	  		if ($i % 3 == 0 && $i % 5 == 0) {
	  			echo "fizzbuzz <br>";
	  		} elseif ($i % 3 == 0) {
	  			echo "fizz <br>";
	  		} elseif ($i % 5== 0) {
	  			echo "buzz <br>";
	  		} else {
	  			echo "$i <br>";
	  		}
	  	}
	   ?>

	   <hr>
	   <?php 
	   	for ($a=0; $a <= 7 ; $a++) { 
	   		for ($b=0; $b < $a ; $b++) { 
	   			echo "#";
	   			
	   		}
	   		echo "<br>";
	   	}
	    ?>
</body>
</html>





