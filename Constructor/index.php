<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Constractor</title>
</head>
<body>
	<?php
		include '1.php'; 
	 ?>

	 <?php
	 	$car_details = new car("BMW","black");

	 	echo $car_details->get_model();
	 	echo "<br>";
	 	echo $car_details->get_color(); 
	  ?>
</body>
</html>