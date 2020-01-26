<?php  

	class Category {


		private $con;
		private $id;

		public function __construct($con, $id){
			$this->con = $con;
			$this->id = $id;
		}

		public function getType() {
			$categoryQuery = mysqli_query($this->con, "SELECT cat_type FROM category WHERE cat_id = '$this->id'");
			$category = mysqli_fetch_array($categoryQuery);
			return $category['cat_type'];
		}

	}


?>