<?php  

	class Horse {


		private $con;
		private $id;
		private $horseName;
		private $horseImage;
		private $categoryId;
		private $ownerId;
		private $horseColour;
		private $horseSire;
		private $horseDam;

		public function __construct($con, $id){
			$this->con = $con;
			$this->id = $id;

			$query = mysqli_query($this->con, "SELECT * FROM horses WHERE horse_id = '$this->id'");
			$horse = mysqli_fetch_array($query);

			$this->horseName = $horse['horse_name'];
			$this->categoryId = $horse['category'];
			$this->ownerId = $horse['owner'];
			$this->horseImage = $horse['horse_image'];
			$this->horseColour = $horse['colour'];
			$this->horseSire = $horse['sire'];
			$this->horseDam = $horse['dam'];
			

		}

		public function getName() {
			return $this->horseName;
		}

		public function getCategory() {
			return new Category($this->con, $this->categoryId);
		}

		public function getOwner() {
			return new Owner($this->con, $this->ownerId);
		}

		public function getHorseImage() {
			return $this->horseImage;
		}

		public function getColour() {
			return $this->horseColour;
		}

		public function getSire() {
			return $this->horseSire;
		}

		public function getDam() {
			return $this->horseDam;
		}

	}


?>