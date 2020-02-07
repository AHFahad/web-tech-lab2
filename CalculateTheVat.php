<!DOCTYPE html>
<html>
<head>
	<title>Calculate The Vate</title>
</head>
<body>
	<form method="post">
		Input the amount :
		<input type="number" name="amount"><br>
		<input type="submit" value="Calculate" name="calculate">
	</form>

	<?php 
		if(isset($_POST["calculate"])){
			echo "The amount of vat is :".$_POST["amount"]*0.15;
		}

	 ?>
</body>
</html>