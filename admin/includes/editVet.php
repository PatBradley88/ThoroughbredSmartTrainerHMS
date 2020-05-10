<?php  
	
	if(isset($_GET['v_id'])) {
		$the_vet_id = $_GET['v_id'];
	}

	$query = "SELECT * FROM vet WHERE vet_id = {$the_vet_id}";
	$select_vet_by_id = mysqli_query($con, $query);

	while($row = mysqli_fetch_assoc($select_vet_by_id)) {
		$vet_id = $row['vet_id'];
		$vet_horse_id = $row['vet_horse_id'];
		$vet_name = $row['vet_name'];
		$vet_note = $row['vet_note'];
		$vet_note_poster = $row['vet_note_poster'];
		$vet_date = $row['vet_date'];
	}

	if(isset($_POST['update_vet'])) {
		
		$vet_horse_id = $_POST['vet_horse_id'];
		$vet_name = $_POST['vet_name'];
		$vet_note = $_POST['vet_note'];
		$vet_note_poster = $_POST['vet_poster'];
		$vet_date = date('m.d.y');

		$vet_name = mysqli_real_escape_string($con, $_POST['vet_name']);
		$vet_note = mysqli_real_escape_string($con, $_POST['vet_note']);
		$vet_note_poster = mysqli_real_escape_string($con, $_POST['vet_poster']);


		$query = "UPDATE vet SET ";
		$query .="vet_horse_id = '{$vet_horse_id}', ";
		$query .="vet_name = '{$vet_name}', ";
		$query .="vet_note = '{$vet_note}', ";
		$query .="vet_note_poster = '{$vet_note_poster}', ";
		$query .="vet_date = now() ";
		$query .= "WHERE vet_id = {$the_vet_id} ";

		$update_vet = mysqli_query($con, $query);

		if (!$update_vet) {

		      die ("Query Failed" . mysqli_error($con));

		    }
		    
		}

?>

<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>VET </h2>
		<div>
			<label for="vet_horse_id">Name of Horse</label>
			<select name="vet_horse_id" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM horses";
			$select_horse = mysqli_query($con, $query);

			if (!$select_horse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_horse)) {
				$horse_id = $row['horse_id'];
				$horse_name = $row['horse_name'];

				if ($vet_horse_id == $horse_id) {
					echo "<option value='{$horse_id}' selected>{$horse_name}</option>";
				} else {
					echo "<option value='{$horse_id}'>{$horse_name}</option>";
				}
			}

			?>
			</select>
		</div>
		<label for="vet_name">Vet Name</label>
		<input type="text" name="vet_name" placeholder="Vet Name" value="<?php echo $vet_name; ?>">
		<label for="vet_note">Vet's Note</label>
		<input type="text" name="vet_note" placeholder="Duties carried out" value="<?php echo $vet_note; ?>">
		<div>
			<label for="vet_poster">Posted By</label>
			<select name="vet_poster" id="horse_dropdown">
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

				if ($vet_note_poster == $id) {
					echo "<option value='{$id}' selected>{$firstName} {$lastName}</option>";
				} else {
					echo "<option value='{$id}'>{$firstName} {$lastName}</option>";
				}

			}

			?>
			</select>
		</div>
		<button class="button" onclick="" name="update_vet">UPDATE</button>
	</div>
	
</div>

</form>