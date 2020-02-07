<!DOCTYPE html>
<html>
<head>
	<title>Find even or Odd</title>
</head>
<body>
	<form method="post">
		Input the amount :
		<input type="number" name="amount"><br>
		<input type="submit" value="Find" name="find">
	</form>

	<?php 
		if(isset($_POST["find"])){

			if($_POST["amount"]%2){
				echo "odd number";
			}
			else{
				echo "even number.";
			}
		}

	 ?>
</body>
</html>