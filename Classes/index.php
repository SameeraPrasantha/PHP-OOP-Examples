<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<?php 
			include '1.php';
		 ?>

		 <?php 
		 	$apple = new fruit();
		 	$apple->get_data("Apple");

		 	echo $apple->set_data();
		 	echo "<br>";
		  ?>
</body>
</html>