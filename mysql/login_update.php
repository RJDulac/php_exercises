<?php 

include "db.php";
include "functions.php";

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET ";
	$query .= "username = '$username', ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);

	if(!$result) {
		die("QUERY FAILED" . mysqli_error($connection));

	}


}

	 

	// $query = "SELECT * FROM users";
	// $result = mysqli_query($connection, $query);

	// if(!$result) {
	// 	die('Query FAILED!' . mysqli_error());
	// }






?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="col-sm-6">


		</div>
			<form action="login_update.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<select name="id" id="">


						<?php
						// while($row = mysqli_fetch_assoc($result)) {
						// 	$id = $row['id'];

						// 	echo "<option value='$id'>$id</option>";


						// }

						showAllData();

						?>
						<!--  -->
					</select>
				</div>

				<input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

			</form>

	</div>
	
</body>
</html>