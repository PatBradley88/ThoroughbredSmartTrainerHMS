<?php  
	
	if(isset($_GET['f_id'])) {
		$the_farrier_id = $_GET['f_id'];
	}

	$query = "SELECT * FROM farrier WHERE farrier_id = {$the_farrier_id}";
	$select_farrier_by_id = mysqli_query($con, $query);

	while($row = mysqli_fetch_assoc($select_farrier_by_id)) {
		$farrier_id = $row['farrier_id'];
		$farrier_horse_id = $row['farrier_horse_id'];
		$farrier_name = $row['farrier_name'];
		$farrier_note = $row['farrier_note'];
		$farrier_note_poster = $row['farrier_note_poster'];
		$farrier_date = $row['farrier_date'];
	}

	if(isset($_POST['update_farrier'])) {
		
		$farrier_horse_id = $_POST['farrier_horse_id'];
		$farrier_name = $_POST['farrier_name'];
		$farrier_note = $_POST['farrier_note'];
		$farrier_note_poster = $_POST['farrier_poster'];
		$farrier_date = date('m.d.y');

		$farrier_name = mysqli_real_escape_string($con, $_POST['farrier_name']);
		$farrier_note = mysqli_real_escape_string($con, $_POST['farrier_note']);
		$farrier_note_poster = mysqli_real_escape_string($con, $_POST['farrier_poster']);


		$query = "UPDATE farrier SET ";
		$query .="farrier_horse_id = '{$farrier_horse_id}', ";
		$query .="farrier_name = '{$farrier_name}', ";
		$query .="farrier_note = '{$farrier_note}', ";
		$query .="farrier_note_poster = '{$farrier_note_poster}', ";
		$query .="farrier_date = now() ";
		$query .= "WHERE farrier_id = {$the_farrier_id} ";

		$update_farrier = mysqli_query($con, $query);

		if (!$update_farrier) {

		      die ("Query Failed" . mysqli_error($con));

		    }
		    
		}

?>

<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>FARRIER </h2>
		<div>
			<select name="farrier_horse_id" id="horse_dropdown">
			<?php 

			$query = "SELECT * FROM horses";
			$select_horse = mysqli_query($con, $query);

			if (!$select_horse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_horse)) {
				$horse_id = $row['horse_id'];
				$horse_name = $row['horse_name'];

				if ($farrier_horse_id == $horse_id) {
					echo "<option value='{$horse_id}' selected>{$horse_name}</option>";
				} else {
					echo "<option value='{$horse_id}'>{$horse_name}</option>";
				}
			}

			?>
			</select>
		</div>
		<input type="text" name="farrier_name" placeholder="Farrier Name" value="<?php echo $farrier_name; ?>">
		<input type="text" name="farrier_note" placeholder="Duties carried out" value="<?php echo $farrier_note; ?>">
		<div>
			<select name="farrier_poster" id="horse_dropdown">
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
		<button class="button" onclick="" name="update_farrier">UPDATE</button>
	</div>
	
</div>

</form>