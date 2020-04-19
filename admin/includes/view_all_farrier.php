<table class="content-table">
	<thead>
		<tr>
			<th>Horse</th>
			<th>Farrier Name</th>
			<th>Note</th>
			<th>Posted By</th>
			<th>Date Added</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$query = "SELECT * FROM farrier";
			$select_farrier = mysqli_query($con, $query);

			while($row = mysqli_fetch_assoc($select_farrier)) {
				$farrier_id = $row['farrier_id'];
				$farrier_horse_id = $row['farrier_horse_id'];
				$farrier_name = $row['farrier_name'];
				$farrier_note = $row['farrier_note'];
				$farrier_note_poster = $row['farrier_note_poster'];
				$farrier_date = $row['farrier_date'];
			
		
		echo "<tr>";
			
			$query = "SELECT * FROM horses WHERE horse_id = {$farrier_horse_id}";
			$select_horse = mysqli_query($con, $query);

			if (!$select_horse) {

		      die ("Query Failed" . mysqli_error($con));

		    }
			while($row = mysqli_fetch_assoc($select_horse)) {
				$horse_id = $row['horse_id'];
				$horse_name = $row['horse_name'];
			
			echo "<td>{$horse_name}</td>";
			}

			echo "<td>{$farrier_name}</td>";
			echo "<td>{$farrier_note}</td>";
			echo "<td>{$farrier_note_poster}</td>";
			echo "<td>{$farrier_date}</td>";
			echo "<td><a href='viewFarrier.php?source=editFarrier&o_id={$farrier_id}'><i class='fas fa-edit'></i></a></td>";
			echo "<td><a href='viewFarrier.php?delete={$farrier_id}'><i class='far fa-trash-alt'></i></a></td>";
		echo "</tr>";
		}
		?>
	</tbody>
	
</table>

<?php  

if(isset($_GET['delete'])) {
	$the_farrier_id = $_GET['delete'];

	$query = "DELETE FROM farrier WHERE farrier_id = {$the_farrier_id}";
	$delete_query = mysqli_query($con, $query);
}

?>







