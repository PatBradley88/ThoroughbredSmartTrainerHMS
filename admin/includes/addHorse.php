<?php 
if(isset($_POST['add_horse'])) {
	$horse_name = $_POST['horse_name'];

	$horse_image = $_FILES['image']['name'];
	$horse_image_temp = $_FILES['image']['tmp_name'];

	$category_id = $_POST['horse_category'];
	$dateOfBirth = $_POST['dateOfBirth'];
	$colour = $_POST['colour'];
	$passport_no = $_POST['passport_no'];
	$sire = $_POST['sire'];
	$dam = $_POST['dam'];
	$horse_owner_id = $_POST['horse_owner'];
	$breeder = $_POST['breeder'];
	$received_from = $_POST['received_from'];
	$training_status = $_POST['training_status'];
	$added_date = date('m.d.y');

	move_uploaded_file($horse_image_temp, "../images/$horse_image");

	$query = "INSERT INTO horses(horse_name, horse_image, category_id, dateOfBirth,
								colour, passport_no, sire, dam, horse_owner_id, breeder,
								received_from, training_status, added_date)";

	$query .= "VALUES('{$horse_name}', 'images/{$horse_image}', {$category_id}, 
				'{$dateOfBirth}', '{$colour}', '{$passport_no}', '{$sire}', '{$dam}', 
				{$horse_owner_id}, '{$breeder}', '{$received_from}',
				'{$training_status}', now())";


	$create_horse_query = mysqli_query($con, $query);

	 if (!$create_horse_query) {

      die ("Query Failed" . mysqli_error($con));

    }
}

?>





<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>HORSE DETAILS</h2>
		<input type="text" name="horse_name" placeholder="Horse Name" value="">
		<input type="file" name="image" placeholder="Upload Image" value="">
		<div>
			<select name="horse_category" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM category";
			$select_category = mysqli_query($con, $query);

			if (!$select_category) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_category)) {
				$cat_id = $row['cat_id'];
				$cat_type = $row['cat_type'];

				echo "<option value='{$cat_id}'>{$cat_type}</option>";
			}

			?>
			</select>
		</div>
		<label for="dateOfBirth">Date of Birth</label>
		<input type="date" name="dateOfBirth" placeholder="Date of Birth" value="">
		<input type="text" name="colour" placeholder="Colour" value="">
		<input type="text" name="passport_no" placeholder="Passport No." value="">
		<input type="text" name="sire" placeholder="Sire" value="">
		<input type="text" name="dam" placeholder="Dam" value="">
	</div>

	<div class="container borderBottom">
		<h2>HORSE HISTORY</h2>
		<div>
			<select name="horse_owner" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM owners";
			$select_owner = mysqli_query($con, $query);

			if (!$select_owner) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_owner)) {
				$owner_id = $row['owner_id'];
				$name = $row['name'];

				echo "<option value='{$owner_id}'>{$name}</option>";
			}

			?>
			</select>
		</div>
		<input type="text" name="breeder" placeholder="Breeder" value="">
		<input type="text" name="received_from" placeholder="Received From" value="">
	</div>

	<div class="container">
		<h2>HORSE HISTORY</h2>
		<label for="training_status">Training Status</label>
        <select name="training_status" id="horse_dropdown">
           <option value="Active">Select Options</option>
           <option value="In Training">In Training</option>
           <option value="Out of Training">Out of Training</option>
        </select>
		<button class="button" onclick="" name="add_horse">ADD HORSE</button>
	</div>
	
</div>

</form>
