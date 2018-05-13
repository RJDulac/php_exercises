<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	function saySomething() {

		echo "Hello Student";

	}

	saySomething();

	function calculate() {
		echo 456 + 34 ."<br>";
	}	

function init() {
		calculate();
		saySomething();
}
init();

	?>
	
</body>
</html>