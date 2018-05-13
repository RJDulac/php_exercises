<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	function addNumbers($a,$b) {

		$c = $a + $b;
		return $c;

	}

	$result = addNumbers(5,10);

	echo $result;
	echo "<br>";

	$result = addNumbers(100, $result);

	echo $result;


	?>
	
</body>
</html>