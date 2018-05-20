<?php 
include "db.php";
include "functions.php";
include "includes/header.php";



deleteRows();



	 

	// $query = "SELECT * FROM users";
	// $result = mysqli_query($connection, $query);

	// if(!$result) {
	// 	die('Query FAILED!' . mysqli_error());
	// }






?>

	<div class="container">
		<div class="col-sm-6">
			<h1 class="text-center">Delete</h1>
			<form action="login_delete.php" method="post">
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

				<input class="btn btn-primary" type="submit" name="submit" value="DELETE">

			</form>

	</div>
	
<?php

include "includes/footer.php";

?>