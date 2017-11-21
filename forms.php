<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<div class="container">
		<form method="post">
		<fieldset>
			<legend>
				 <h2>My Calculator</h2>
			</legend>
		 <br>
		<input type="text" placeholder="name" name="youname" required="required">
		<br>
		<input type="number" placeholder="numberone" name="f1">
		<br>
		<input type="number" placeholder="numbertwo" name="f2">
		<br>
		<input type="submit" value="+" name="submit">

		</fieldset>
	</form>
	</div>
	
	<?php 
		if(isset($_POST["submit"])){

			// echo"I have been clicked!";
			$name = $_POST["youname"];
			$numberone = $_POST["f1"];
			$numbertwo = $_POST["f2"];

			$answer = $numberone * $numbertwo;

			echo"Hello $name the answer is $answer";
		}
	 ?>
</body>
</html>



<!-- create a squareroot form with one input and a button and answer on the screen should be the squareroot of the input  -->