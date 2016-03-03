<?php 
if(isset($_POST['submit'])) {
	
	$names = array("Hussein", "Ahmed");
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(strlen($username) < 4) {
		echo "Username has to be longer than four";
	}

	if(strlen($username) > 10) {
		echo "Username cannot be longer than 10";
	}

	if(!in_array($username, $names)) {
		echo "Sorry, you are not allowed!";
	} else {
		echo "Welcome Back!";
	}

}


?>