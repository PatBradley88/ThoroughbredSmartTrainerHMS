<?php 
include("../../config.php");

if (isset($_POST['horseId'])) {
	$horseId = $_POST['horseId'];

	$query = mysqli_query($con, "SELECT * FROM horses WHERE id='$horseId'");

	$resultArray = mysqli_fetch_array($query);
	echo json_encode($resultArray);
}
?>