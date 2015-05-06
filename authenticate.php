<?php
	session_start();
	
	$host = "localhost";
	$sql_uname = "customcoderz";
	$sql_pword = "YM4xS@M3n@zub";
	$database = "auscertdb";
	$_SESSION['error'] = "";
	
	$connection = new mysqli($host, $sql_uname, $sql_pword, $database);

	if (!$connection) {
		$_SESSION['error'] = "Could not connect to login database.";
		header("Location: login.php");
		exit;	
	}
	
	if (isset($_POST['submit'])) {
		$email = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);
		
		$query = "SELECT first_name FROM user WHERE email='$email'";
		$results = mysqli_query($connection, $query);
		$rows = mysqli_num_rows($results);
		
		if ($rows == 1) {
			
			while ($row = mysqli_fetch_assoc($results)) {
				foreach ($row as $value) {
					$_SESSION['username'] = $value;
				}
			}
			
			$_SESSION['error'] = "";
			header("Location: index.php");
		} else {
			$_SESSION['error'] = "Incorrect Username/Password";
			header("Location: login.php");
		}
	}
?>