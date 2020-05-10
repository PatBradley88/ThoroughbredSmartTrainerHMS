<?php  
	
	if(isset($_GET['m_id'])) {
		$the_misc_id = $_GET['m_id'];
	}

	$query = "SELECT * FROM misc_apps WHERE misc_id = {$the_misc_id}";
	$select_misc_by_id = mysqli_query($con, $query);

	while($row = mysqli_fetch_assoc($select_misc_by_id)) {
		$misc_id = $row['misc_id'];
		$misc_horse_id = $row['misc_horse_id'];
		$therapy_type = $row['therapy_type'];
		$therapist_name = $row['therapist_name'];
		$misc_note = $row['misc_note'];
		$misc_note_poster = $row['misc_note_poster'];
		$date_added = $row['date_added'];
	}

	if(isset($_POST['update_misc'])) {
		
		$misc_horse_id = $_POST['misc_horse_id'];
		$therapy_type = $_POST['therapy_type'];
		$therapist_name = $_POST['therapist_name'];
		$misc_note = $_POST['misc_note'];
		$misc_note_poster = $_POST['misc_note_poster'];
		$date_added = date('m.d.y');

		$therapist_name = mysqli_real_escape_string($con, $_POST['therapist_name']);
		$misc_note = mysqli_real_escape_string($con, $_POST['misc_note']);
		$misc_note_poster = mysqli_real_escape_string($con, $_POST['misc_note_poster']);


		$query = "UPDATE misc_apps SET ";
		$query .="misc_horse_id = '{$misc_horse_id}', ";
		$query .="therapy_type = '{$therapy_type}', ";
		$query .="therapist_name = '{$therapist_name}', ";
		$query .="misc_note = '{$misc_note}', ";
		$query .="misc_note_poster = '{$misc_note_poster}', ";
		$query .="date_added = now() ";
		$query .= "WHERE misc_id = {$the_misc_id} ";

		$update_misc = mysqli_query($con, $query);

		if (!$update_misc) {

		      die ("Query Failed" . mysqli_error($con));

		    }
		    
		}

?>

<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>Therapy </h2>
		<div>
			<label for="misc_horse_id">Name of Horse</label>
			<select name="misc_horse_id" id="horse_dropdown">
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
			<label for="therapy_type">Type of Therapy</label>
			<select name="therapy_type" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM appointment_type";
			$select_app_type = mysqli_query($con, $query);

			if (!$select_app_type) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_app_type)) {
				$appoint_id = $row['appoint_id'];
				$appoint_type = $row['appoint_type'];

				echo "<option value='{$appoint_id}'>{$appoint_type}</option>";
			}

			?>
			</select>
		</div>
		<label for="therapist_name">Name of Therapist</label>
		<input type="text" name="therapist_name" placeholder="Therapist Name" value="<?php echo $therapist_name ?>">
		<label for="misc_note">Therapist note</label>
		<input type="text" name="misc_note" placeholder="Duties carried out" value="<?php echo $misc_note ?>">

		<div>
			<label for="misc_note_poster">Posted By</label>
			<select name="misc_note_poster" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM users";
			$select_user = mysqli_query($con, $query);

			if (!$select_user) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_user)) {
				$id = $row['id'];
				$firstName = $row['firstName'];
				$lastName = $row['lastName'];

				echo "<option value='{$id}'>{$firstName} {$lastName}</option>";
			}

			?>
			</select>
		</div>
		<button class="button" onclick="" name="update_misc">SUBMIT</button>
	</div>
	
</div>

</form>