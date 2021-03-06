<?php  

	class Horse {


		private $con;
		private $id;
		private $horseName;
		private $horseImage;
		private $categoryId;
		private $horse_owner_id;
		private $horseColour;
		private $horsePassport;
		private $horseSire;
		private $horseDam;
		private $horseBreeder;
		private $horseDoB;
		private $horseReceivedFrom;
		private $horseTrainingStatus;

		public function __construct($con, $id){
			$this->con = $con;
			$this->id = $id;

			$query = mysqli_query($this->con, "SELECT * FROM horses WHERE horse_id = '$this->id'");
			$horse = mysqli_fetch_array($query);

			$this->horseName = $horse['horse_name'];
			$this->categoryId = $horse['category_id'];
			$this->ownerId = $horse['horse_owner_id'];
			$this->horseImage = $horse['horse_image'];
			$this->horseColour = $horse['colour'];
			$this->horsePassport = $horse['passport_no'];
			$this->horseSire = $horse['sire'];
			$this->horseDam = $horse['dam'];
			$this->horseBreeder = $horse['breeder'];
			$this->horseDoB = $horse['dateOfBirth'];
			$this->horseReceivedFrom = $horse['received_from'];
			$this->horseTrainingStatus = $horse['training_status'];
			

		}

		public function getName() {
			return $this->horseName;
		}

		public function getCategory() {
			return new Category($this->con, $this->categoryId);
		}

		public function getDoB() {
			return $this->horseDoB;
		}

		public function getOwner() {
			return new Owner($this->con, $this->ownerId);
		}

		public function getBreeder() {
			return $this->horseBreeder;
		}

		public function getHorseImage() {
			return $this->horseImage;
		}

		public function getColour() {
			return $this->horseColour;
		}

		public function getPassport() {
			return $this->horsePassport;
		}

		public function getSire() {
			return $this->horseSire;
		}

		public function getDam() {
			return $this->horseDam;
		}

		public function getReceivedFrom() {
			return $this->horseReceivedFrom;
		}

		public function getTrainingStatus() {
			return $this->horseTrainingStatus;
		}

	}


?>