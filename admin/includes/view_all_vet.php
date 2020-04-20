<table class="content-table">
	<thead>
		<tr>
			<th>Horse</th>
			<th>Vet Name</th>
			<th>Note</th>
			<th>Posted By</th>
			<th>Date Added</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$query = "SELECT * FROM vet";
			$select_vet = mysqli_query($con, $query);

			while($row = mysqli_fetch_assoc($select_vet)) {
				$vet_id = $row['vet_id'];
				$vet_horse_id = $row['vet_horse_id'];
				$vet_name = $row['vet_name'];
				$vet_note = $row['vet_note'];
				$vet_note_poster = $row['vet_note_poster'];
				$vet_date = $row['vet_date'];
			
		
		echo "<tr>";
			
			$query = "SELECT * FROM horses WHERE horse_id = {$vet_horse_id}";
			$select_horse = mysqli_query($con, $query);

			if (!$select_horse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_horse)) {
				$horse_id = $row['horse_id'];
				$horse_name = $row['horse_name'];
			
			echo "<td>{$horse_name}</td>";
			}

			echo "<td>{$vet_name}</td>";
			echo "<td>{$vet_note}</td>";
			echo "<td>{$vet_note_poster}</td>";
			echo "<td>{$vet_date}</td>";
			echo "<td><a href='viewVet.php?source=editVet&o_id={$vet_id}'><i class='fas fa-edit'></i></a></td>";
			echo "<td><a href='viewVet.php?delete={$vet_id}'><i class='far fa-trash-alt'></i></a></td>";
		echo "</tr>";
		}
		?>
	</tbody>
	
</table>

<?php  

if(isset($_GET['delete'])) {
	$the_vet_id = $_GET['delete'];

	$query = "DELETE FROM vet WHERE vet_id = {$the_vet_id}";
	$delete_query = mysqli_query($con, $query);
}

?>







