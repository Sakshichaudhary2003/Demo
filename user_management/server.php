<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];


		mysqli_query($db, "INSERT INTO info (name, address,email) VALUES ('$name', '$address','$email')"); 
		$_SESSION['message'] = "User saved"; 
		header('location: index.php');
	}

// ...