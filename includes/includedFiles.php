<?php  

if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	include("includes/config.php");
	include("includes/classes/Category.php");
	include("includes/classes/Horse.php");
	include("includes/classes/Owner.php");
}
else {
	include("includes/header.php");
	include("includes/footer.php");

	$url = $_SERVER['REQUEST_URI'];
	echo "<script>openPage('$url')</script>";
	exit();
}

?>

<!-- Checks if page was retrieved by AJAX or manually through URL -->