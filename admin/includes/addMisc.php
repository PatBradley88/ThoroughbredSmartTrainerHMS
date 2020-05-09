<?php 
if(isset($_POST['add_misc'])) {
	$misc_horse_id = $_POST['misc_horse_id'];
	$therapy_type = $_POST['therapy_type'];
	$therapist_name = $_POST['therapist_name'];
	$misc_note = $_POST['misc_note'];
	$misc_note_poster = $_POST['misc_note_poster'];
	$date_added = date('m.d.y');

	$therapist_name = mysqli_real_escape_string($con, $_POST['therapist_name']);
	$misc_note = mysqli_real_escape_string($con, $_POST['misc_note']);
	$misc_note_poster = mysqli_real_escape_string($con, $_POST['misc_note_poster']);

	
	$query = "INSERT INTO misc_apps(misc_horse_id, therapy_type, therapist_name, misc_note,
							misc_note_poster, date_added)";

	$query .= "VALUES('{$misc_horse_id}', '{$therapy_type}', '{$therapist_name}', '{$misc_note}', 
				'{$misc_note_poster}', now())";


	$create_misc_query = mysqli_query($con, $query);

	 if (!$create_misc_query) {

      die ("Query Failed" . mysqli_error($con));

    }
}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>Therapy </h2>
		<div>
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
		<input type="text" name="therapist_name" placeholder="Therapist Name" value="">
		<input type="text" name="misc_note" placeholder="Duties carried out" value="">

		<div>
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
		<button class="button" onclick="" name="add_misc">SUBMIT</button>
	</div>
	
</div>

</form>
