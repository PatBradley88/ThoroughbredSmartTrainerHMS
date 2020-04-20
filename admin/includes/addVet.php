<?php 
if(isset($_POST['add_vet'])) {
	$vet_horse_id = $_POST['vet_horse_id'];
	$vet_name = $_POST['vet_name'];
	$vet_note = $_POST['vet_note'];
	$vet_note_poster = $_POST['vet_note_poster'];
	$vet_date = date('m.d.y');

	

	$query = "INSERT INTO vet(vet_horse_id, vet_name, vet_note,
							vet_note_poster, vet_date)";

	$query .= "VALUES('{$vet_horse_id}', '{$vet_name}', '{$vet_note}', 
				'{$vet_note_poster}', now())";


	$create_vet_query = mysqli_query($con, $query);

	 if (!$create_vet_query) {

      die ("Query Failed" . mysqli_error($con));

    }
}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>VET </h2>
		<div>
			<select name="vet_horse_id" id="horse_category">
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
		<input type="text" name="vet_name" placeholder="Vet Name" value="">
		<input type="text" name="vet_note" placeholder="Duties carried out" value="">
		<input type="text" name="vet_note_poster" placeholder="Your name" value="">
		<button class="button" onclick="" name="add_vet">SUBMIT</button>
	</div>
	
</div>

</form>
