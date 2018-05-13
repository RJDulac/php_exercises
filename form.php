<?php

if(isset($_POST['submit'])) {

	$name = ["Ryan", "John", "Peter", "Jake", "Rob", "Jane", "Tom", "maria"];

	$minimun = 5;
	$maximun = 10;

	$username = $_POST['username'];
	$password = $_POST['password'];

	// echo $username . "<br>" . $password;

	if(strlen($username) < $minimun) {
		echo "Username has to be longer than 5 characters" . "<br>";

	}

	if(strlen($username) > $maximun) {
		echo "username cannot be longer than 10 characters" . "<br>";
	}

	if(!in_array($username, $name)) {

		echo "Sorry you don't have login permission" . "<br>";

	} else {
		echo "Welcome" . " ". $username;
	}


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="form.php" method="post">
		<input type="text" name="username" placeholder="Enter username"> <br>
		<input type="password" name="password" placeholder="Enter passwrod"> <br>
		<input type="submit" name="submit">
	</form>

	
</body>
</html>