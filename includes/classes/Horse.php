<?php  

	class Horse {


		private $con;
		private $id;
		private $horseName;
		private $horseImage;
		private $categoryId;

		public function __construct($con, $id){
			$this->con = $con;
			$this->id = $id;

			$query = mysqli_query($this->con, "SELECT * FROM horses WHERE horse_id = '$this->id'");
			$horse = mysqli_fetch_array($query);

			$this->horseName = $horse['horse_name'];
			$this->categoryId = $horse['category'];
			$this->horseImage = $horse['horse_image'];
		}

		public function getName() {
			return $this->horseName;
		}

		public function getCategory() {
			return new Category($this->con, $this->categoryId);
		}

		public function getHorseImage() {
			return $this->horseImage;
		}

	}


?>