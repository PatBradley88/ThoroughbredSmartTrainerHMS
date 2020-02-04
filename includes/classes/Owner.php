<?php  

	class Owner {


		private $con;
		private $id;
		private $ownerName;
		private $ownerColours;
		private $ownerAddress1;
		private $ownerAddress2;
		private $ownerAddress3;
		private $ownerEmail;
		private $ownerPhone;

		public function __construct($con, $id){
			$this->con = $con;
			$this->id = $id;
		// }

		// public function getOwnerName() {
			$ownerQuery = mysqli_query($this->con, "SELECT * FROM owners WHERE owner_id = '$this->id'");
			$owner = mysqli_fetch_array($ownerQuery);
			// return $owner['name'];

			$this->ownerName = $owner['name'];
			$this->ownerAddress1 = $owner['address1'];
			$this->ownerAddress2 = $owner['address2'];
			$this->ownerAddress3 = $owner['address3'];
			$this->ownerEmail = $owner['email'];
			$this->ownerPhone = $owner['contactNo'];
			$this->ownerColours = $owner['owner_colours'];

		}

		public function getOwnerName() {
			return $this->ownerName;
		}

		public function getOwnerAddress1() {
			return $this->ownerAddress1;
		}

		public function getOwnerAddress2() {
			return $this->ownerAddress2;
		}

		public function getOwnerAddress3() {
			return $this->ownerAddress3;
		}

		public function getOwnerEmail() {
			return $this->ownerEmail;
		}

		public function getOwnerPhone() {
			return $this->ownerPhone;
		}

		public function getOwnerColours() {
			return $this->ownerColours;
		}
	}


?>