<!DOCTYPE html>
<html>
<head>
	<title>calculate Area and Parimeter</title>
</head>
<body>
	<form method="post">
		Input two numbers<br>
		1st Number:
		<input type="number" name="Number1" >
		<br>
		2nd Number:
		<input type="number" name="Number2" >
		<br>

		<input type="submit" name="submit" value="add">
	</form>
	<?php 
			if(isset($_POST["submit"])){
				$n=$_POST["Number1"];
				$n2=$_POST["Number2"];
				$range=0;
				$range=$n*$n2;
				$perimeter=2*($n+$n2);
			}
		$r= "The area of Reactange is ".$range;
		$p="The perimeter is ".$perimeter;
		echo $r;
		echo "<br>";

		echo $p;
	?>


</body>
</html>