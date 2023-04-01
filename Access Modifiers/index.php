<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Modifiers</title>
</head>
<body>
	<?php
		include '1.php'; // call the other php file

		$get_data = new car();
		$get_data->set_name1("BMW"); //working
		echo $get_data->get_info();

		$get_data->set_name2("Nissan");//Error
		$get_data->set_name3("volvo");//Error
	 ?>
</body>
</html>