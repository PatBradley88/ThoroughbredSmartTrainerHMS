<?php 
include("../../config.php");

if (isset($_POST['ownerId'])) {
	$ownerId = $_POST['ownerId'];

	$query = mysqli_query($con, "SELECT * FROM owners WHERE id='$ownerId'");

	$resultArray = mysqli_fetch_array($query);
	echo json_encode($resultArray);
}
?>