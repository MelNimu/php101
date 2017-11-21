<!DOCTYPE html>
<html>
<head>
	<title>For each Loop in PhP</title>
</head>
<body>
	<?php 
		echo "<h2>For each loops in PHP</h2>";

		// First way  to create arrays
		$numbers = array(30, 0.89 , 3478 , 765);
		print_r($numbers);
		echo "<br>";
		echo $numbers [2];

		echo "<br>";

		echo "Count items in my array";
		echo count($numbers);

		echo "<br>";

		echo "Max value in my array" . max($numbers) . "<br>";
		echo "sort array" . sort($numbers);
		echo "<pre>";
		print_r($numbers);
		echo "</pre>";

		echo "<br> reverse sort array" . rsort($numbers);
		echo "<pre>";
		print_r($numbers);
		echo "</pre>";

		// Nesting arrays
		echo "<h2>Nested arrays</h2>";
		$things = [35 , 89, "pizza" , "true" , array("money" , 35 , "yeeiii") , "Tuesday"];
		echo "<pre>";
		print_r($things);
		echo "</pre>";
		echo "<br>";

		echo "I like " . $things[2] . " and " . $things[4][0] . " and I am " . $things[4][1] . " and today is " . $things[5];
	?>
		 <!-- Associative array -->
		<h2>Associative array</h2>
		<?php 
			$grades = ["Anto" => 42 , "Hamdi" => 90 , "Levi" => 65 , "Imelda" => 100];
			echo "<pre>";
			print_r($grades);
			echo "</pre>";
		 ?>

		 <h2>Using a forloop to access values in an indexed array</h2>
		 <?php 
		 	$hobbies = ["reading" , "dancing" , "swimming" , "roadtrips" , "watching movies"];
		 	print_r($hobbies);
		 	echo "<br>";
		 	$arrayLength = count($hobbies);
		 	for ($x=0; $x < $arrayLength ; $x++) { 
		 		echo "The position at index " . $x . " is " . $hobbies[$x] . "<br>";
		 	}

		 	$add10 = [200 , 39 , 45, 67, 712];
		 	echo "<p>Using a forloop add 10 to every element fo the array  then prin out ,  the element at index after adding 10 is ans</p>";
		 	$ans = count($add10);
		 	print_r($add10);
		 	echo "<br>";

		 	for ($z=0; $z < $ans ; $z++) { 
		 		echo "The element at index " . $z . " after adding 10 is " . ($add10[$z] +=10) . "<br>";
		 	}

		 	echo "<h2>For each loops</h2>";
		 	$names = ["Imelda" , "Nimu" , "eMobilis" , "Doe" ];
		 	foreach ($names as $name) {
		 		echo "name: :" . $name . "<br>";
		 	}

		 	echo "<hr>";
		 	echo "<h2> Associative array</h2>";
		 	$assoc = array("Imelda" => 20 , "Doe" => 30 , "Jane" => 40 , "Sharon" => 50);
		 	echo "<pre>";
		 	print_r($assoc);
		 	echo "</pre>";

		 	echo "<br>";
		 	foreach ($assoc as $key) {
		 		echo "Age is : " . $key . "<br>";
		 	}
		 	echo "<br>";
		 	foreach ($assoc as $key => $value) {
		 		echo $key . " is " . $value . " years old. <br>";
		 	}

		 	echo "<hr>";
		 	echo "<h2> real case use </h2>";
		 	$person = array(
		 		"first_name" => "Imelda" , 
		 		"last_name" => "Wairimu" ,
		 		"address" => "203 Nairobi" , 
		 		"country" => "Kenya" , 
		 		"email" => "mel@gmail.com"
		 	);

		 	echo "<pre>";
		 	print_r($person);
		 	echo "</pre><br>";
		 	echo "<h4> Prettify the data </h4>";
		 	foreach ($person as $attribute => $data) {
		 		$att_pretty = ucwords(str_replace("_", " ", $attribute));
		 	echo $att_pretty . " : " . $data . "<br>";
		 	}
		  ?>

	<h3>Assignment</h3>
	<p>Create an indexed array with tyhe following values : 
		tokyo , mexico city , new york city , mumbai , seoul , shanghai ,  lagos ,  buenos aires , cairo , london <br> Using a foreach loop , print the values separated by a comma. <br> Sort the array, then print the values to the browser. <br> add the following corresponding countries  to the array in an associative array and print it out using country as key and city as value <br> <em>using foreach loop $city is in $country</em>	</p>
	


	
</body>
</html>