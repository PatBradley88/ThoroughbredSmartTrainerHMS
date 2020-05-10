<?php  
	
	if(isset($_GET['r_id'])) {
		$the_race_id = $_GET['r_id'];
	}

	$query = "SELECT * FROM races WHERE race_id = $the_race_id";
	$select_races_by_id = mysqli_query($con, $query);

	while($row = mysqli_fetch_assoc($select_races_by_id)) {
		$race_id = $row['race_id'];
		$race_horse_id = $row['race_horse_id'];
		$race_country_id = $row['race_country_id'];
		$race_racecourse_id = $row['race_racecourse_id'];
		$race_date = $row['race_date'];
		$race_no = $row['race_no'];
		$race_name = $row['race_name'];
		$race_status_id = $row['race_status_id'];
		$race_distance_id = $row['race_distance_id'];
		$race_age_cat_id = $row['race_age_cat_id'];
		$fee = $row['fee'];
		$declaration_date = $row['declaration_date'];
		$finish_pos = $row['finish_pos'];
	}

	if(isset($_POST['update_race'])) {
		
		$race_horse_id = $_POST['horse_name'];
		$country_id = $_POST['country'];
		$racecourse_id = $_POST['racecourse'];
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


		$query = "UPDATE races SET ";
		$query .="race_horse_id = '{$race_horse_id}', ";
		$query .="race_country_id = '{$race_country_id}', ";
		$query .="race_racecourse_id = '{$race_racecourse_id}', ";
		$query .="race_date = '{$race_date}', ";
		$query .="race_no = '{$race_no}', ";
		$query .="race_name = '{$race_name}', ";
		$query .="race_status_id = '{$race_status_id}', ";
		$query .="race_distance_id = '{$race_distance_id}', ";
		$query .="race_age_cat_id = '{$race_age_cat_id}', ";
		$query .="fee = '{$fee}', ";
		$query .="declaration_date = '{$declaration_date}', ";
		$query .="finish_pos = '{$finish_pos}' ";
		$query .= "WHERE race_id = {$the_race_id} ";

		$update_race = mysqli_query($con, $query);

		if (!$update_race) {

		      die ("Query Failed" . mysqli_error($con));

		    }
		    
		}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>RACE DETAILS</h2>
		<div>
			<label for="horse_name">Name of Horse</label>
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

				if ($race_horse_id == $horse_id) {
					echo "<option value='{$horse_id}' selected>{$horse_name}</option>";
				} else {
					echo "<option value='{$horse_id}'>{$horse_name}</option>";
				}
			}

			?>
			</select>
		</div>
		<div>
			<label for="country">Country</label>
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

				if ($race_country_id == $country_id) {
					echo "<option value='{$country_id}' selected>{$country}</option>";
				} else {
					echo "<option value='{$country_id}'>{$country}</option>";
				}
			}

			?>
			</select>
		</div>
		<div>
			<label for="">Racecourse</label>
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

				if ($race_racecourse_id == $racecourse_id) {
					echo "<option value='{$racecourse_id}' selected>{$racecourse}</option>";
				} else {
					echo "<option value='{$racecourse_id}'>{$racecourse}</option>";
				}
			}

			?>
			</select>
		</div>
		<label for="race_date">Date of Race</label>
		<input type="date" name="race_date" placeholder="Date of Race" value="<?php echo $race_date; ?>">
		<label for="number">Race Number</label>
		<input type="number" name="race_no" placeholder="Race Number" value="<?php echo $race_no; ?>">
		<label for="race_name">Name of the Race</label>
		<input type="text" name="race_name" placeholder="Name of Race" value="<?php echo $race_name; ?>">
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

				if ($race_status_id == $status_id) {
					echo "<option value='{$status_id}' selected>{$status}</option>";
				} else {
					echo "<option value='{$status_id}'>{$status}</option>";
				}
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

				if ($race_distance_id == $distance_id) {
					echo "<option value='{$distance_id}' selected>{$race_distance}</option>";
				} else {
					echo "<option value='{$distance_id}'>{$race_distance}</option>";
				}
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

				if ($race_age_cat_id == $age_cat_id) {
					echo "<option value='{$age_cat_id}' selected>{$age_cat}</option>";
				} else {
					echo "<option value='{$age_cat_id}'>{$age_cat}</option>";
				}
			}

			?>
			</select>
		</div>
		<label for="fee">Race Entry Fee</label>
		<input type="text" name="fee" placeholder="Entry Fee" value="<?php echo $fee; ?>">
		<label for="declaration_date">Declaration Date</label>
		<input type="date" name="declaration_date" placeholder="Declaration Date" value="<?php echo $declaration_date; ?>">
		<label for="finish_pos">Finishing Position</label>
		<input type="number" name="finish_pos" placeholder="Finishing Position" value="<?php echo $finish_pos; ?>">
	</div>

	

	<div class="container">
		<button class="button" onclick="" name="update_race">UPDATE RACE ENTRY</button>
	</div>
	
</div>

</form>