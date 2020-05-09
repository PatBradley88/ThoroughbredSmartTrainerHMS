<?php 
if(isset($_POST['add_race'])) {
	$race_horse_id = $_POST['horse_name'];
	$race_country_id = $_POST['country'];
	$race_racecourse_id = $_POST['racecourse'];
	$race_date = $_POST['race_date'];
	$race_no = $_POST['race_no'];
	$race_name = $_POST['race_name'];
	$race_status_id = $_POST['status'];
	$race_distance_id = $_POST['distance'];
	$race_age_cat_id = $_POST['age_cat'];
	$fee = $_POST['fee'];
	$declaration_date = $_POST['declaration_date'];
	$finish_pos = $_POST['finish_pos'];

	$race_age_cat_id = mysqli_real_escape_string($con, $_POST['age_cat']);


	$query = "INSERT INTO races(race_horse_id, race_country_id, race_racecourse_id, race_date,
								race_no, race_name, race_status_id, race_distance_id, race_age_cat_id, fee,
								declaration_date, finish_pos)";

	$query .= "VALUES({$race_horse_id}, {$race_country_id}, {$race_racecourse_id}, '{$race_date}', 
					'{$race_no}', '{$race_name}', {$race_status_id}, {$race_distance_id}, {$race_age_cat_id},
					'{$fee}', '{$declaration_date}',
					'{$finish_pos}')";


	$create_race_query = mysqli_query($con, $query);

	 if (!$create_race_query) {

      die ("Query Failed" . mysqli_error($con));

    }
}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h3>RACE DETAILS</h3>
		<div>
			<select name="horse_name" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM horses";
			$select_horse = mysqli_query($con, $query);

			if (!$select_horse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_horse)) {
				$horse_id = $row['horse_id'];
				$horse_name = $row['horse_name'];

				echo "<option value='{$horse_id}'>{$horse_name}</option>";
			}

			?>
			</select>
		</div>
		<div>
			<select name="country" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM racecourse_country";
			$select_country = mysqli_query($con, $query);

			if (!$select_country) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_country)) {
				$country_id = $row['country_id'];
				$country = $row['country'];

				echo "<option value='{$country_id}'>{$country}</option>";
			}

			?>
			</select>
		</div>
		<div>
			<select name="racecourse" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM racecourse";
			$select_racecourse = mysqli_query($con, $query);

			if (!$select_racecourse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_racecourse)) {
				$racecourse_id = $row['racecourse_id'];
				$racecourse = $row['racecourse'];

				echo "<option value='{$racecourse_id}'>{$racecourse}</option>";
			}

			?>
			</select>
		</div>
		<label for="dateOfBirth">Date of Race</label>
		<input type="date" name="race_date" placeholder="Date of Race" value="">
		<label for="number">Race Number</label>
		<input type="number" name="race_no" placeholder="Race Number" value="">
		<input type="text" name="race_name" placeholder="Name of Race" value="">
		<div>
			<label for="status">Race Status</label>
			<select name="status" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM race_status";
			$select_status = mysqli_query($con, $query);

			if (!$select_status) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_status)) {
				$status_id = $row['status_id'];
				$status = $row['status'];

				echo "<option value='{$status_id}'>{$status}</option>";
			}

			?>
			</select>
		</div>
		<div>
			<label for="distance">Race Distance</label>
			<select name="distance" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM race_distance";
			$select_distance = mysqli_query($con, $query);

			if (!$select_distance) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_distance)) {
				$distance_id = $row['distance_id'];
				$race_distance = $row['race_distance'];

				echo "<option value='{$distance_id}'>{$race_distance}</option>";
			}

			?>
			</select>
		</div>
		<div>
			<label for="age_cat">Race Category</label>
			<select name="age_cat" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM age_cat";
			$select_age_cat = mysqli_query($con, $query);

			if (!$select_age_cat) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_age_cat)) {
				$age_cat_id = $row['age_cat_id'];
				$age_cat = $row['age_cat'];

				echo "<option value='{$age_cat_id}'>{$age_cat}</option>";
			}

			?>
			</select>
		</div>
		<input type="text" name="fee" placeholder="Entry Fee" value="">
		<label for="declaration_date">Declaration Date</label>
		<input type="date" name="declaration_date" placeholder="Declaration Date" value="">
		<input type="number" name="finish_pos" placeholder="Finishing Position" value="">
	</div>

	

	<div class="container">
		<button class="button" onclick="" name="add_race">ADD RACE ENTRY</button>
	</div>
	
</div>

</form>
