<?php 
if(isset($_POST['add_horse'])) {
	$horse_name = $_POST['horse_name'];

	$horse_image = $_FILES['image']['name'];
	$horse_image_temp = $_FILES['image']['tmp_name'];

	$category_id = $_POST['category_id'];
	$dateOfBirth = $_POST['dateOfBirth'];
	$colour = $_POST['colour'];
	$passport_no = $_POST['passport_no'];
	$sire = $_POST['sire'];
	$dam = $_POST['dam'];
	$owner_id = $_POST['owner_id'];
	$breeder = $_POST['breeder'];
	$received_from = $_POST['received_from'];
	$training_status = $_POST['training_status'];
	$added_date = date('m.d.y');

	move_uploaded_file($horse_image_temp, "../assets/images/horses/$horse_image");

	$query = "INSERT INTO horses(horse_name, horse_image, category_id, dateOfBirth,
								colour, passport_no, sire, dam, owner_id, breeder,
								received_from, training_status, added_date)";

	$query .= "VALUES('{$horse_name}', 'assets/images/horses/{$horse_image}', {$category_id}, '{$dateOfBirth}', '{$colour}', '{$passport_no}', '{$sire}', '{$dam}', {$owner_id}, '{$breeder}', '{$received_from}',
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
		<input type="text" name="category_id" placeholder="Sex" value="">
		<label for="dateOfBirth">Date of Birth</label>
		<input type="date" name="dateOfBirth" placeholder="Date of Birth" value="">
		<input type="text" name="colour" placeholder="Colour" value="">
		<input type="text" name="passport_no" placeholder="Passport No." value="">
		<input type="text" name="sire" placeholder="Sire" value="">
		<input type="text" name="dam" placeholder="Dam" value="">
	</div>

	<div class="container borderBottom">
		<h2>HORSE HISTORY</h2>
		<input type="text" name="owner_id" placeholder="Owner Name" value="">
		<input type="text" name="breeder" placeholder="Breeder" value="">
		<input type="text" name="received_from" placeholder="Received From" value="">
	</div>

	<div class="container">
		<h2>HORSE HISTORY</h2>
		<input type="text" name="training_status" placeholder="Training Status" value="">
		<button class="button" onclick="" name="add_horse">ADD HORSE</button>
	</div>
	
</div>

</form>
