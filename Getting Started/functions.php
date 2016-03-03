<?php include "db.php";

function createRow() {
	global $connection;
	if(isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = mysqli_real_escape_string($connection, $username);
	$password = mysqli_real_escape_string($connection, $password);
    
    $hashFormat = "$2y$10$";
    $salt = "justrandomstringforsalt";
    $hash_salt = $hashFormat . $salt;
    $password = crypt($password, $hash_salt);

	$query = "INSERT INTO users(username, password) ";
	$query .= "VALUES ('$username', '$password')";
	$result = mysqli_query($connection, $query);

	if(!$result) {
		die("Query FAILED");
	}


	if($username && $password) {
		echo "<h3>Record Created</h3>";
	} else {
		echo "<h3>Please enter Username and Password</h3>";
	}

	}
}

function showAllData() {
	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if(!$result) {
		die("Query FAILED" . mysqli_error());
	}

	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}

function updateTable() {
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die("Query failed man!" . mysqli_error($connection));
	} else {
		echo "Record Updated";
	}
}

function deleteRow() {
	if(isset($_POST['submit'])) {
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "DELETE FROM users WHERE id = $id";
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die("Query failed man!" . mysqli_error($connection));
	} else {
		echo "Record Deleted";
	}
	}
}
 ?>