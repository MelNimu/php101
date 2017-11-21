<!DOCTYPE html>
<html>
<head>
	<title>PHP  Inbuilt Functions!</title>
</head>
<body>
	<?php 
		echo "<h2>String Inbuilt Functions</h2>";
		$first = "The quick brown fox";
		$second = "jumped over the lazy dogs";

		echo  $first . $second;

		// the . is  an addition a concutination
		$third = $first;
		$third .= $second;

		echo $third;
	 ?>

	 <br>
	 lowercase: <?php echo strtolower($third); ?>
	 <br>
	 uppercase: <?php echo strtoupper($third); ?>
	 <br>
	 uppercase first: <?php echo ucfirst($third); ?>
	 <br>
	 uppercase word: <?php echo ucwords($third); ?>
	 <br>
	 length: <?php echo strlen($third); ?>
	 <br>
	 find: <?php echo strstr($third, "fox"); ?>
	 <br>
	 replace: <?php echo str_replace("fox", "tiger", $third); ?>
	 <br>
	 repeat: <?php echo str_repeat($third, 3); ?>
	 <br>
	 make substring: <?php echo substr($third, 3,16); ?>
	 <br>
	 find position: <?php echo strpos($third, "over"); ?>
</body>
</html>