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

	if(isset($_POST['update_horse'])) {
		
		$horse_name = $_POST['horse_name'];

		$horse_image = $_FILES['image']['name'];
		$horse_image_temp = $_FILES['image']['tmp_name'];

		$category_id = $_POST['horse_category'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$colour = $_POST['colour'];
		$passport_no = $_POST['passport_no'];
		$sire = $_POST['sire'];
		$dam = $_POST['dam'];
		$owner_id = $_POST['horse_owner'];
		$breeder = $_POST['breeder'];
		$received_from = $_POST['received_from'];
		$training_status = $_POST['training_status'];

		move_uploaded_file($horse_image_temp, "../assets/images/horses/$horse_image");

		if(empty($horse_image)) {
			$query = "SELECT * FROM horses WHERE horse_id = $the_horse_id";
			$select_image = mysqli_query($con, $query);

			while($row = mysqli_fetch_array($select_image)) {
				$horse_image = $row['horse_image'];
			}
		}

		$query = "UPDATE horses SET ";
		$query .="horse_name = '{$horse_name}', ";
		$query .="horse_image = 'assets/images/horses/{$horse_image}', ";
		$query .="category_id = '{$category_id}', ";
		$query .="dateOfBirth = '{$dateOfBirth}', ";
		$query .="colour = '{$colour}', ";
		$query .="passport_no = '{$passport_no}', ";
		$query .="sire = '{$sire}', ";
		$query .="dam = '{$dam}', ";
		$query .="owner_id = '{$owner_id}', ";
		$query .="breeder = '{$breeder}', ";
		$query .="received_from = '{$received_from}', ";
		$query .="training_status = '{$training_status}', ";
		$query .="added_date = now() ";
		$query .= "WHERE horse_id = {$the_horse_id} ";

		$update_horse = mysqli_query($con, $query);

		if (!$update_horse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
		    
		}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>HORSE DETAILS</h2>
		<input type="text" name="horse_name" placeholder="Horse Name" value="<?php echo $horse_name; ?>">
		<!-- <input type="file" name="image" placeholder="Upload Image" value="<?php echo $horse_image; ?>"> -->
		<img width="100" src="../<?php echo $horse_image; ?>" alt="">
		<input type="file" name="image">
		<div>
			<select name="horse_category" id="horse_category">
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
		<input type="date" name="dateOfBirth" placeholder="Date of Birth" value="<?php echo $dateOfBirth; ?>">
		<input type="text" name="colour" placeholder="Colour" value="<?php echo $colour; ?>">
		<input type="text" name="passport_no" placeholder="Passport No." value="<?php echo $passport_no; ?>">
		<input type="text" name="sire" placeholder="Sire" value="<?php echo $sire; ?>">
		<input type="text" name="dam" placeholder="Dam" value="<?php echo $dam; ?>">
	</div>

	<div class="container borderBottom">
		<h2>HORSE HISTORY</h2>
		<div>
			<select name="horse_owner" id="horse_category">
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
		<input type="text" name="breeder" placeholder="Breeder" value="<?php echo $breeder; ?>">
		<input type="text" name="received_from" placeholder="Received From" value="<?php echo $received_from; ?>">
	</div>

	<div class="container">
		<h2>HORSE HISTORY</h2>
		<input type="text" name="training_status" placeholder="Training Status" value="<?php echo $training_status; ?>">
		<button class="button" onclick="" name="update_horse" value="Update Horse">UPDATE HORSE</button>
	</div>
	
</div>

</form>