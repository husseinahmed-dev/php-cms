<?php include "db.php";
include "functions.php";

deleteRow();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="col-xs-6">
	<h1 class="text-center">Delete</h1>
	<form action="login_delete.php" method="post">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password">
		</div>
		<div class="form-group">
			<select name="id" id="">
				<?php 
				showAllData();

				 ?>
			</select>
		</div>

		<input class="btn btn-primary" type="submit" name="submit" value="DELETE">
	</form>

	</div>
	</div>
</body>
</html>