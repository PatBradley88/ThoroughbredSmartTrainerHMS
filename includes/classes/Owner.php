<?php  

	class Owner {


		private $con;
		private $id;
		private $ownerName;
		private $ownerColours;

		public function __construct($con, $id){
			$this->con = $con;
			$this->id = $id;
		}

		public function getOwner() {
			$ownerQuery = mysqli_query($this->con, "SELECT * FROM owners WHERE owner_id = '$this->id'");
			$owner = mysqli_fetch_array($ownerQuery);
			return $owner['name'];
		}

		public function getOwnerColours() {
			return $this->ownerColours;
		}
	}


?>