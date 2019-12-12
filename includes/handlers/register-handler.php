<?php 

function sanitizeFormPassword($inputText) {

	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormUsername($inputText) {

	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormString($inputText) {

	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}




if (isset($_POST['registerButton'])) {
	//Login Button was pressed
	//below cleans up data entries for db. Taken from sanitization functions above.
	$username = sanitizeFormUsername($_POST['username']);	
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$yardName = sanitizeFormString($_POST['yardName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $yardName, $email, $email2, $password, $password2);

	if ($wasSuccessful == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
		# code...
	}
	

}

?>