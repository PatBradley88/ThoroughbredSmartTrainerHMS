<?php 
include("includes/config.php");

//session_destroy(); Temp Logout Button

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
	# code...
} else {
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Racing Trainer</title>
</head>
<body>
	Welcome to Thoroughbred Smart Trainer!
</body>
</html>