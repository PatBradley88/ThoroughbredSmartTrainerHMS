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
<?php include("includes/header.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Thoroughbred Smart Trainer - Michael Halford Racing</title>

	<!--Bootstrap Core CSS -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/tst-home.css">

</head>

<body>
<!-- Navigation bar -->
	
<!-- <?php include("includes/navigation.php"); ?>
 -->
	<div id="navBarContainer1">
		<div id="navBar1">
			<div id="navBarLeft">
				<img src="assets/images/TSTWht.png" alt="Logo" id="logo">
			</div>
			<div id="navBarCentre">
				<div class="menuOptions">
					<ul class="options">
						<li>
							<a href="#">Admin</a>
						</li>
						<li>
							<a href="#">Horses</a>
						</li>
						<li>
							<a href="#">Owners</a>
						</li>
					</ul>
				</div>
				
			</div>
			<div id="navBarRight">
				
			</div>
		</div>
		
			
	</div>

	<div id="profileContainer">
		<img src="assets/images/MHalfordImg1.jpg" class="profiles" name="img1">
		<img src="assets/images/MHalfordImg2.jpg" class="profiles">
		<img src="assets/images/MHalfordImg3.jpg" class="profiles">
		<img src="assets/images/MHalfordImg1.jpg" class="profiles">
		<img src="assets/images/MHalfordImg2.jpg" class="profiles">
		<img src="assets/images/MHalfordImg3.jpg" class="profiles">
	</div>

	<div id="footerText">
		<p>Copyright &copy; Thoroughbred Smart Trainer 2020</p>
	</div>
<!-- 	
<?php 
include("includes/footer.php"); 
?> -->

	

</body>

</html>
