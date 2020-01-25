<?php 
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");



	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Thoroughbred Smart Trainer</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/register.js"></script>

</head>
<body>
	<?php //js inside php to show relevant form should mistake be made.

	if (isset($_POST['registerButton'])) {
		echo '<script>
		$(document).ready(function() {
			$("#loginForm").hide(); $("#registerForm").show();
			});
		</script>';
		# code...
	} else {
		echo '<script>
		$(document).ready(function() {
			$("#loginForm").show();
		$("#registerForm").hide();
		});
	</script>';
	}

	?>
	

	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" type="text" name="loginUsername" value="<?php getInputValue('loginUsername') ?>" placeholder="e.g. Halford_m" required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" type="password" name="loginPassword" placeholder="Your Password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Sign up here.</span>
					</div>
					
				</form>

				<form id="registerForm" action="register.php" method="POST">
					<h2>Register a new account</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken) ?>
						<label for="username">Username</label>
						<input id="username" type="text" name="username" value="<?php getInputValue('username') ?>" placeholder="e.g. Halford_m" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First Name</label>
						<input id="firstName" type="text" name="firstName" value="<?php getInputValue('firstName') ?>" placeholder="e.g. Michael" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last Name</label>
						<input id="lastName" type="text" name="lastName" value="<?php getInputValue('lastName') ?>" placeholder="e.g. Halford" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$yardNameCharacters); ?>
						<label for="yardName">Yard Name</label>
						<input id="yardName" type="text" name="yardName" value="<?php getInputValue('yardName') ?>" placeholder="e.g. Copper Beech Stables" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input id="email" type="email" name="email" value="<?php getInputValue('email') ?>" placeholder="shergar@gmail.com" required>
					</p>
					<p>
						<label for="email2">Confirm Email</label>
						<input id="email2" type="email" name="email2" value="<?php getInputValue('email2') ?>" placeholder="shergar@gmail.com" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$passwordMustBeAlphaNumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Password</label>
						<input id="password" type="password" name="password" placeholder="Your Password" required>
					</p>
					<p>
						<label for="password2">Confirm Password</label>
						<input id="password2" type="password" name="password2" placeholder="Your Password" required>
					</p>

					<button type="submit" name="registerButton">REGISTER ACCOUNT</button>

					<div class="hasAccountText">
						<span id="hideRegister">Don't have an account yet? Sign up here.</span>
					</div>
					
				</form>
			</div>

			<div id="loginText">
				<img id="MHLogo" src="assets/images/MHLogo.png">
				<img id="SmartTrainerLogo" src="assets/images/SmartTrainerLogo.png">
			</div>

		</div>	
	</div>

</body>
</html>