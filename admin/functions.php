<?php 

function confirm($result) {

	global $con;

	if (!$result) {
      die ("Query Failed ." . mysqli_error($con));
    }

}


?>