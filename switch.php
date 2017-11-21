<!DOCTYPE html>
<html>
<head>
	<title>Switch Statement</title>
</head>
<body>
	<?php 
		echo "<h1>What a day</h1>";

		$weather = "snowy";
		if ($weather == "sunny") {
			echo "Time to take out your  summer dresses <br>";
		}elseif ($weather == "rainy") {
			echo "Time to grab your boots and umbrella <br>";
		}elseif ($weather == "windy") {
			echo "Make sure to wear a ponytail, your hair is gonna be everywhere <br>";
		}elseif ($weather == "snowy") {
			echo "let's build a snowman <br>";
		}else{
			echo "No recommendation for said weather conditions";
		}
		echo "<br><hr><h2>Switch Statement</h2><hr><br>";
		/* 
			syntax 
			switch(value){
				case test_value:
					code to be run;
					break;
			}
		*/


		$weatherc = "snowy";
		switch ($weatherc) {
			case "sunny":
				echo "yeeii perfect weather for swimming";
				break;
			case "rainy":
				echo "wear your  boots and pack an umbrella";
				break;
			case "windy":
				echo "pull a ponytail, best style for the wind";
				break;
			case "snowy":
				echo "Yeeeiii, do you wanna build a snowman?";
				break;
			default:
				echo "We do not have a recommendation for your weather yet";
				break;
		}
	 ?>
	 <hr>
	 <h3>Chinese Zodiac Sign</h3>
	 <hr>
	 <?php 
	 	$yearBorn = 2034;
	 	echo "I was born in " . $yearBorn;
	 	echo "<br>";
	 	switch (($yearBorn - 4) % 12) {
	 		case 0: $zodiac = "Rat"; break;
	 		case 1: $zodiac = "Ox"; break;
	 		case 2: $zodiac = "Tiger"; break;
	 		case 3: $zodiac = "Rabbit"; break;
	 		case 4: $zodiac = "Dragon"; break;
	 		case 5: $zodiac = "Snake"; break;
	 		case 6: $zodiac = "Horse"; break;
	 		case 7: $zodiac = "Goat"; break;
	 		case 8: $zodiac = "Monkey"; break;
	 		case 9: $zodiac = "Rooster"; break;
	 		case 10: $zodiac = "Dog"; break;
	 		case 11: $zodiac = "Pig"; break;
	 		
	 		default:
	 			# code...
	 			break;
	 	}
	 	echo "$yearBorn is the year of the $zodiac";
	  ?>
</body>
</html>