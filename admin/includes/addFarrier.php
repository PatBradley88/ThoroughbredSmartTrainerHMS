<?php 
if(isset($_POST['add_farrier'])) {
	$farrier_horse_id = $_POST['farrier_horse_id'];
	$farrier_name = $_POST['farrier_name'];
	$farrier_note = $_POST['farrier_note'];
	$farrier_note_poster = $_POST['farrier_note_poster'];
	$farrier_date = date('m.d.y');

	

	$query = "INSERT INTO farrier(farrier_horse_id, farrier_name, farrier_note,
							farrier_note_poster, farrier_date)";

	$query .= "VALUES('{$farrier_horse_id}', '{$farrier_name}', '{$farrier_note}', 
				'{$farrier_note_poster}', now())";


	$create_farrier_query = mysqli_query($con, $query);

	 if (!$create_farrier_query) {

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

				echo "<option value='{$horse_id}'>{$horse_name}</option>";
			}

			?>
			</select>
		</div>
		<input type="text" name="farrier_name" placeholder="Farrier Name" value="">
		<input type="text" name="farrier_note" placeholder="Duties carried out" value="">
		<input type="text" name="farrier_note_poster" placeholder="Your name" value="">
		<button class="button" onclick="" name="add_farrier">SUBMIT</button>
	</div>
	
</div>

</form>
