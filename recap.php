<!DOCTYPE html>
<html>
<head>
	<title>Recap!!!</title>
</head>
<body>
	<h4>Loops in PhP</h4>
	<ul>
		<li>While loop <br> <em>Syntax</em> 
			<pre>
				while (condition){
				code to be run;
				change condition;
			}
			</pre></li>
		<li>Do-while loop <br> <em>Syntax</em>
			<pre>
				do{
				code to be run 
				while(condition);
			}
			</pre>
		</li>
		<li>For loop <br> <em>Syntax</em>
			<pre>
				for(initialize ; condition ; increment){
				code to be run
			}
			</pre>
		</li>
		<li>for-each loop <br> <em>Syntax</em>
			<pre>
				foreach($array as $value){
				code to be executed;
			}
			</pre>
		</li>
	</ul>
	<hr>
	<?php 
	echo "<h3>While loop</h3>";
	$count = 0;
	while ($count <= 100) {
		echo "Value of count is $count <br>";
		$count +=5;
	}
	echo "The value of count after loop stops running is now $count";

	echo "<hr><h3>For Loops</h3>";
	for ($counter=10; $counter <= 50 ; $counter++) { 
		if ($counter % 2 == 0) {
			echo "$counter is an even number <br>";
		} else {
			echo "$counter is an odd number <br>";
		}
	}
	 ?>
</body>
</html>