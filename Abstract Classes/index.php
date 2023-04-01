<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Abstract Class</title>
</head>
<body>
	<?php include '1.php' ?>

	<?php
		$volvo = new Volvo("volvo");
		echo $volvo->set_data();
		echo "<br>";

		$bmw = new BMW("bmw");
		echo $bmw->set_data();
		echo "<br>";

		$honda = new Honda("honda");
		echo $honda->set_data();
		echo "<br>";
	 ?>
</body>
</html>