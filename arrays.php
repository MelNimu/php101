<!DOCTYPE html>
<html>
<head>
	<title>Arrays!!!</title>
</head>
<body>
	<h3>Working with Arrays!!</h3>
	<?php 
		echo "<h4>Indexed Arrays </h4>";
		$fArray = array("greece" , "havana" , "diani" , "capetown" , 3 , 5 , 689.54 , array("nested_array" , 10));
		// An array is a variable that stores multiple values in a single variable.
		$sArray = ["nairobi" , "pizza" , "pork" , 290];

		// arrays are not echo'd they are printed, i.e print_r
		print_r($fArray);

		// How to access values inside indexed arrays
		echo "<br>Item at position 3 is : " .$fArray[2];
		echo "<br>";
		echo "The item at first position in second array is :" . $sArray[0];
		echo "<br>";

		$mixedArray = ["eMobilis" , "Imelda" , 712 , array("hTC" , "iPhone") , "true"];
		print_r($mixedArray);
		echo "<br>";
		echo "Value of nested array is :" . $mixedArray[3][0];
		echo "<br>";
		$mixedArray[0] = "This class is awesome";
		print_r($mixedArray);
		echo "<br>";
		$mixedArray[] = "New Value";
		print_r($mixedArray);
	 ?>
	 <h4>Associative Arrays</h4>
	 <?php 
	 	$assoc = array("first_name" => "Imelda" , "last_name" => "Wairimu" , "hobby" => "Dancing" , "best_site" => "bikozulu");
	 	echo "My name is " . $assoc["first_name"] . " " . $assoc["last_name"] . " and my hobby is " . $assoc["hobby"] . " and I love to read " . $assoc["best_site"];
	 	echo "<br>";
	 	$assoc["favorite_language"] = "html";
	 	
	 	echo "<pre>";
	 	print_r($assoc);
	 	echo "</pre>";

	 	echo "<br>";
	 	$array1 = array(220 , 389 , "cow");
	 	echo "<pre>";
	 	print_r($array1);
	 	echo "</pre>";
	 	echo "<br>";
	  ?>

	  <h4>Assignments!!</h4>
	  <?php 
	  	$marks = array("Imelda" => array("PHP" => 30 , "HTML" => 80 , "CSS" => 90) , "Levi" => array("PHP" => 40 , "HTML" => 70 , "CSS" => 90) , "Nathan" => array("PHP" => 50 , "HTML" => 89 , "CSS" => 56));
	  	echo "<pre>";
	  	print_r($marks);
	  	echo "</pre>";
	  	
	   ?>
</body>
</html>