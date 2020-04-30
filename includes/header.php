<?php 
include("includes/config.php");
include("includes/classes/Category.php");
include("includes/classes/User.php");
include("includes/classes/Horse.php");
include("includes/classes/Owner.php");



//session_destroy(); Temp Logout Button

if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
    $username = $userLoggedIn->getUsername();
    echo "<script>userLoggedIn = '$username';</script>";
} else {
    header("Location: register.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

   <!--  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> -->

    <title>Thoroughbred Smart Trainer</title>

    <!-- Bootstrap Core CSS -->
<!--     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
 -->
    <!-- Custom CSS -->
    <link href="css/tst-home.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<div id="mainContainer">
    
    <div id="topContainer">

    <?php include("includes/sidebar.php") ?>
            
    </div>

    <div id="mainViewContainer">

        <div id="mainContent">





