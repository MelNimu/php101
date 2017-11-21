<!DOCTYPE html>
<html>
<head>
	<title>PHP Operators</title>
</head>
<body>
	<h1>Arithmetic Operators</h1>
	<?php 
		$no1 = 500;
		$no2 = 200;
		// additional operator
		$ans = $no1 + $no2;
		echo "Addition Result = " . $ans;
		echo "<br>";
		$ans =$no1 - $no2;
		echo "subtraction result = " . $ans;
		echo "<br>";
		$ans = $no1 * $no2;
		echo "Multiplication is =" . $ans;
		echo "<br>";
		$ans = $no1 / $no2;
		echo "division is =" . $ans;
		echo "<br>";
		$ans = $no1 % $no2;
		echo "Modulus operator is = " . $ans;
		echo "<br>";
		$ans = ++$no1;
		echo "Increment Operator is =" . $ans;
		echo "<br>";
		$ans = --$no1;
		echo "Decrement operator is =" . $ans;

	 ?>
	 <h1>Comparison operators</h1>
	 <?php 
	 	// they are used inside conditional statements
	/* == checks if the value of two operands are equal or not, if yes then the condition becomes true and  if not the condition is false.
	 === checks for strict equality, does a=b?
	 20 == "20" this is true.
	 20 === "20" this is false since one is a string and the other an integer.
	 != not equals to, it checks if the value of two operands are not equal. example
	 35 != 35 is false but 35 != 40 is true
	 > greater than
	 < less than
	 >= greater or equal to
	 <= less than or equal to*/

	 $num1 = 400;
	 $num2 = 650;
	 if ($num1 == $num2) {
	 	echo "num1 is equals to num2";
	 } else {
	 	echo "num1 is NOT equal to num2";
	 }
	 echo "<br>";
	 if ($num2 > $num1) {
	 	echo "num1 is greater than num2";
	 } else {
	 	echo "num1 is NOT greater than num2";
	 }
	 echo "<br>";
	 if ($num1 != $num2) {
	 echo "num1 is surely not equal to num2";
	 }else {
	 	echo "the numbers are the same";
	 }
	  ?>

	  <h1>Logical operators</h1>
	  <p>Used to combine conditional statements</p>
	  <?php 
	  	// and or && - logical and ... returns true only if both the operands or conditions checked are true 
	  	// or || - returns true if either of the condition being checked is true and false if everything esle is false.
	  	// !  logical not ... if condition is true it returns false and if condition is false it returns true.

	  $con1 = true;
	  $con2 = false;
	  $con3 = true;

	  if ($con1 && $con2) {
	  	echo "both conditions are true";
	  }
	  else {
	  	echo "both conditions are not true";
	  }
	  echo "<br>";
	  if ($con1 || $con2) {
	  	echo "either  of the conditions is true";
	  } else {
	  	echo "nope not true";
	  }
	  echo "<br>";
	  
	   ?>

	   <h1>Assignment Operators</h1>
	   = simple assignment operator example
	   c = a + b this will assign the value of a + b to c so c is the sum of a & b.
	   += adds the right operand to left operand and assigns the result to the left operand eg.
	   c += a is c = c + a;
	   -= is c -= a is like c = c - a;
	   *= is c *= a is like c = c * a;
	   /= is c /= a is like c = c / a;
	   %= is c %= a is like c = c % a;

	    <br>
	    <h1>Homework</h1>
	    <?php 
	    $int = 8;
	    $ans = $int + 2;
	    echo "Value is now " . $ans;
	     echo "<br>";
	    $ans = $ans - 4;
	    echo "Value is now " . $ans;
	     echo "<br>";
	    $ans = $ans * 5;
	    echo "Value is now " . $ans;
	     echo "<br>";
	    $ans = $ans / 3;
	    echo "Value is now " . $ans; 
	     echo "<br>";
	    $ans = ++$ans;
	    echo "Value is now " . $ans;
	     echo "<br>";
	    $ans = --$ans;
	    echo "Value is now " . $ans;
	     ?>

</body>

</html>




<!-- write a script to produce the output below to the browser by only manipulating only one variable

Value is now 8;
Add 2, value is now 10;
subtract 4, value is now 6;
multiply by 5, value is now 30;
divide by 3, value is now 10;
increment value by 1, value is now 11;
decrement value by 1, value is now 10;


echo value is now . $whoever -->
