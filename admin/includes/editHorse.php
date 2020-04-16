<?php  
	
	if(isset($_GET['h_id'])) {
		$the_horse_id = $_GET['h_id'];
	}

	$query = "SELECT * FROM horses WHERE horse_id = {$the_horse_id}";
	$select_horses_by_id = mysqli_query($con, $query);

	while($row = mysqli_fetch_assoc($select_horses_by_id)) {
		$horse_id = $row['horse_id'];
		$horse_name = $row['horse_name'];
		$horse_image = $row['horse_image'];
		$category_id = $row['category_id'];
		$dateOfBirth = $row['dateOfBirth'];
		$colour = $row['colour'];
		$passport_no = $row['passport_no'];
		$sire = $row['sire'];
		$dam = $row['dam'];
		$owner_id = $row['owner_id'];
		$breeder = $row['breeder'];
		$received_from = $row['received_from'];
		$training_status = $row['training_status'];
		$added_date = $row['added_date'];
	}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>HORSE DETAILS</h2>
		<input type="text" name="horse_name" placeholder="Horse Name" value="<?php echo $horse_name; ?>">
		<!-- <input type="file" name="image" placeholder="Upload Image" value="<?php echo $horse_image; ?>"> -->
		<img width="100" src="../<?php echo $horse_image; ?>" alt="">
		<input type="text" name="category_id" placeholder="Sex" value="<?php echo $category_id; ?>">
		<label for="dateOfBirth">Date of Birth</label>
		<input type="date" name="dateOfBirth" placeholder="Date of Birth" value="<?php echo $dateOfBirth; ?>">
		<input type="text" name="colour" placeholder="Colour" value="<?php echo $colour; ?>">
		<input type="text" name="passport_no" placeholder="Passport No." value="<?php echo $passport_no; ?>">
		<input type="text" name="sire" placeholder="Sire" value="<?php echo $sire; ?>">
		<input type="text" name="dam" placeholder="Dam" value="<?php echo $dam; ?>">
	</div>

	<div class="container borderBottom">
		<h2>HORSE HISTORY</h2>
		<input type="text" name="owner_id" placeholder="Owner Name" value="<?php echo $owner_id; ?>">
		<input type="text" name="breeder" placeholder="Breeder" value="<?php echo $breeder; ?>">
		<input type="text" name="received_from" placeholder="Received From" value="<?php echo $received_from; ?>">
	</div>

	<div class="container">
		<h2>HORSE HISTORY</h2>
		<input type="text" name="training_status" placeholder="Training Status" value="<?php echo $training_status; ?>">
		<button class="button" onclick="" name="add_horse">UPDATE HORSE</button>
	</div>
	
</div>

</form>