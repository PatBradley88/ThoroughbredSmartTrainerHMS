<table class="content-table">
	<thead>
		<tr>
			<th>Horse</th>
			<th>Therapy Type</th>
			<th>Therapist Name</th>
			<th>Note</th>
			<th>Posted By</th>
			<th>Date Added</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$query = "SELECT * FROM misc_apps";
			$select_misc = mysqli_query($con, $query);

			while($row = mysqli_fetch_assoc($select_misc)) {
				$misc_id = $row['misc_id'];
				$misc_horse_id = $row['misc_horse_id'];
				$therapy_type = $row['therapy_type'];
				$therapist_name = $row['therapist_name'];
				$misc_note = $row['misc_note'];
				$misc_note_poster = $row['misc_note_poster'];
				$date_added = $row['date_added'];
			
		
		echo "<tr>";
			
			$query = "SELECT * FROM horses WHERE horse_id = {$misc_horse_id}";
			$select_horse = mysqli_query($con, $query);

			if (!$select_horse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_horse)) {
				$horse_id = $row['horse_id'];
				$horse_name = $row['horse_name'];
			
			echo "<td>{$horse_name}</td>";
			}

			$query = "SELECT * FROM appointment_type WHERE appoint_id = {$therapy_type}";
			$select_therapy = mysqli_query($con, $query);

			if (!$select_therapy) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_therapy)) {
				$appoint_id = $row['appoint_id'];
				$appoint_type = $row['appoint_type'];
			
			echo "<td>{$appoint_type}</td>";
			}

			echo "<td>{$therapist_name}</td>";
			echo "<td>{$misc_note}</td>";

			$query = "SELECT * FROM users WHERE id = {$misc_note_poster}";
			$select_user = mysqli_query($con, $query);

			if (!$select_user) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_user)) {
				$id = $row['id'];
				$firstName = $row['firstName'];
				$lastName = $row['lastName'];

			echo "<td>{$firstName} {$lastName}</td>";
			}
			
			echo "<td>{$date_added}</td>";
			
			echo "<td><a href='viewMiscApps.php?source=editMisc&m_id={$misc_id}'><i class='fas fa-edit'></i></a></td>";
			echo "<td><a href='viewMiscApps.php?delete={$misc_id}'><i class='far fa-trash-alt'></i></a></td>";
		echo "</tr>";
		}
		?>
	</tbody>
	
</table>

<?php  

if(isset($_GET['delete'])) {
	$the_misc_id = $_GET['delete'];

	$query = "DELETE FROM misc_apps WHERE misc_id = {$the_misc_id}";
	$delete_query = mysqli_query($con, $query);
}

?>







