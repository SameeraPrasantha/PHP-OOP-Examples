<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inheritance Protected Examples</title>
</head>
<body>
	<?php include '1.php'; ?>

	<?php
	$get_data = new tomato("carrot","orange");
		$get_data->secound(); // ok
		//$get_data->frist();// error = Uncaught Error: Call to protected method vegetables::frist() from global scope
		?>
	</body>
	</html>