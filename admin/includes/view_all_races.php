<table class="content-table">
	<thead>
		<tr>
			<th>Horse Name</th>
			<th>Country</th>
			<th>Racecourse</th>
			<th>Date of Race</th>
			<th>Race No.</th>
			<th>Race Name</th>
			<th>Race Status</th>
			<th>Distance</th>
			<th>Age & Category</th>
			<th>Fee</th>
			<th>Declaration Date</th>
			<th>Finish Position</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$query = "SELECT * FROM races";
			$select_races = mysqli_query($con, $query);

			while($row = mysqli_fetch_assoc($select_races)) {
				$race_id = $row['race_id'];
				$race_horse_id = $row['race_horse_id'];
				$country_id = $row['country_id'];
				$racecourse_id = $row['racecourse_id'];
				$race_date = $row['race_date'];
				$race_no = $row['race_no'];
				$race_name = $row['race_name'];
				$race_status_id = $row['race_status_id'];
				$race_distance_id = $row['race_distance_id'];
				$race_age_cat_id = $row['race_age_cat_id'];
				$fee = $row['fee'];
				$declaration_date = $row['declaration_date'];
				$finish_pos = $row['finish_pos'];
			
		
		echo "<tr>";

			$query = "SELECT * FROM horses WHERE horse_id = {$race_horse_id}";
			$select_horse = mysqli_query($con, $query);

			if (!$select_horse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_horse)) {
				$horse_id = $row['horse_id'];
				$horse_name = $row['horse_name'];
			
			echo "<td>{$horse_name}</td>";
			}

			$query = "SELECT * FROM racecourse_country WHERE country_id = {$country_id}";
			$select_country = mysqli_query($con, $query);

			if (!$select_country) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_country)) {
				$country_id = $row['country_id'];
				$country = $row['country'];
			
			echo "<td>{$country}</td>";
			}

			$query = "SELECT * FROM racecourse WHERE racecourse_id = {$racecourse_id}";
			$select_racecourse = mysqli_query($con, $query);

			if (!$select_racecourse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_racecourse)) {
				$racecourse_id = $row['racecourse_id'];
				$racecourse = $row['racecourse'];
			
			echo "<td>{$racecourse}</td>";
			}

			echo "<td>{$race_date}</td>";
			echo "<td>{$race_no}</td>";
			echo "<td>{$race_name}</td>";

			$query = "SELECT * FROM race_status WHERE status_id = {$race_status_id}";
			$select_status = mysqli_query($con, $query);

			if (!$select_status) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_status)) {
				$status_id = $row['status_id'];
				$status = $row['status'];
			
			echo "<td>{$status}</td>";
			}

			$query = "SELECT * FROM race_distance WHERE distance_id = {$race_distance_id}";
			$select_distance = mysqli_query($con, $query);

			if (!$select_distance) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_distance)) {
				$distance_id = $row['distance_id'];
				$race_distance = $row['race_distance'];
			
			echo "<td>{$race_distance}</td>";
			}

			$query = "SELECT * FROM age_cat WHERE age_cat_id = {$race_age_cat_id}";
			$select_age_cat = mysqli_query($con, $query);

			if (!$select_age_cat) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_age_cat)) {
				$age_cat_id = $row['age_cat_id'];
				$age_cat = $row['age_cat'];
			
			echo "<td>{$age_cat}</td>";
			}

			echo "<td>{$fee}</td>";
			echo "<td>{$declaration_date}</td>";
			echo "<td>{$finish_pos}</td>";

			echo "<td><a href='viewRaces.php?source=editRace&r_id={$race_id}'><i class='fas fa-edit'></i></a></td>";
			echo "<td><a href='viewRaces.php?delete={$race_id}'><i class='far fa-trash-alt'></i></a></td>";
		echo "</tr>";
		}
		?>
	</tbody>
	
</table>

<?php  

if(isset($_GET['delete'])) {
	$the_race_id = $_GET['delete'];

	$query = "DELETE FROM races WHERE race_id = {$the_race_id}";
	$delete_query = mysqli_query($con, $query);
}

?>

