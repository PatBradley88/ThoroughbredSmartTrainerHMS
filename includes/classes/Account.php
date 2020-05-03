<?php  

	class Account {


		private $con;
		private $errorArray;

		public function __construct($con){
			$this->con = $con;
			$this->errorArray = array();
		}

		public function login($un, $pw) {
			$pw = md5($pw);
			$query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");
			if (mysqli_num_rows($query) == 1) {
				return true;
				# code...
			} else {
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}
		}



		public function register($un, $fn, $ln, $yn, $em, $em2, $pw, $pw2) {
			//validates registration form to ensure data entries are valid
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateYardName($yn);
			$this->validateEmails($em, $em2);
			$this->validatePassword($pw, $pw2);

			if (empty($this->errorArray) == true) {
				//Insert into DB
				return $this->insertUserDetails($un, $fn, $ln, $yn, $em, $pw);
				# code...
			} else {
				return false;
			}
		}

		public function getError($error) {
			if (!in_array($error, $this->errorArray)) {
				$error = "";
				# code...
			}
			return "<span class='errorMessage'>$error</span>";
		}

		private function insertUserDetails($un, $fn, $ln, $yn, $em, $pw) {
			$encryptedPw = md5($pw);
			$profilePic = "images/profile-pics/head_emerald.png";
			$date = date("Y-m-d");

			$result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$yn', '$em', '$encryptedPw', '$date', '$profilePic')");

			return $result;
		}

		private function validateUsername($un){

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}

			//Check if username exists
			$checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
			if (mysqli_num_rows($checkUsernameQuery) != 0) {
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
				# code...
			}

		}

		private function validateFirstName($fn){

			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray, Constants::$firstNameCharacters);
				return;
			}

		}

		private function validateLastName($ln){

			if(strlen($ln) > 25 || strlen($ln) < 2) {
				array_push($this->errorArray, Constants::$lastNameCharacters);
				return;
			}

		}

		private function validateYardName($yn){

			if(strlen($yn) > 25 || strlen($yn) < 2) {
				array_push($this->errorArray, Constants::$yardNameCharacters);
				return;
			}

		}

		private function validateEmails($em, $em2){

			if($em != $em2) {
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
			}

			if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				# code...
			}
			//Check that email has not been used.
			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
			if (mysqli_num_rows($checkEmailQuery) != 0) {
				array_push($this->errorArray, Constants::$emailTaken);
				return;
				# code...
			}
		}

		private function validatePassword($pw, $pw2){

			if ($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordsDoNotMatch);
				return;
				# code...
			}

			if (preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordMustBeAlphaNumeric);
				return;
				# code...
			}

			if(strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;
			}			

		}

	}


?>