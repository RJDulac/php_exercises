<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	$number = [10, 20, 49];

	echo $number[1] . "<br>";

//associative arrays have labels key/value pair
	$names = ["first_name" => 'Ryan', "last_name" => 'Dulac'];
	print_r($names);
	echo "<br>";

	echo $names["first_name"] . " " . $names['last_name'];


	?>
	
</body>
</html>