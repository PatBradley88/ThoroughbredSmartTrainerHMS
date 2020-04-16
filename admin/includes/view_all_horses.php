<table class="content-table">
	<thead>
		<tr>
			<th>Horse Name</th>
			<th>Horse Image</th>
			<th>Category</th>
			<th>Date of Birth</th>
			<th>Colour</th>
			<th>Passport No.</th>
			<th>Sire</th>
			<th>Dam</th>
			<th>Owner</th>
			<th>Breeder</th>
			<th>Received From</th>
			<th>Training Status</th>
			<th>Arrival Date</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$query = "SELECT * FROM horses";
			$select_horses = mysqli_query($con, $query);

			while($row = mysqli_fetch_assoc($select_horses)) {
				$horse_id = $row['horse_id'];
				$horse_name = $row['horse_name'];
				$horse_image = $row['horse_image'];
				$category_id = $row['category_id'];
				$dateOfBirth = $row['dateOfBirth'];
				$colour = $row['colour'];
				$passport_no = $row['passport_no'];
				$sire = $row['sire'];
				$dam = $row['dam'];
				$owner_id = $row['owner_id'];
				$breeder = $row['breeder'];
				$received_from = $row['received_from'];
				$training_status = $row['training_status'];
				$added_date = $row['added_date'];
			
		
		echo "<tr>";
			echo "<td>{$horse_name}</td>";
			echo "<td><img width='100' src='../$horse_image' alt='image'></td>";
			echo "<td>{$category_id}</td>";
			echo "<td>{$dateOfBirth}</td>";
			echo "<td>{$colour}</td>";
			echo "<td>{$passport_no}</td>";
			echo "<td>{$sire}</td>";
			echo "<td>{$dam}</td>";
			echo "<td>{$owner_id}</td>";
			echo "<td>{$breeder}</td>";
			echo "<td>{$received_from}</td>";
			echo "<td>{$training_status}</td>";
			echo "<td>{$added_date}</td>";
			echo "<td><a href='#'><i class='fas fa-edit'></i></a></td>";
			echo "<td><a href='viewHorses.php?delete={$horse_id}'><i class='far fa-trash-alt'></i></a></td>";
		echo "</tr>";
		}
		?>
	</tbody>
	
</table>

<?php  

if(isset($_GET['delete'])) {
	$the_horse_id = $_GET['delete'];

	$query = "DELETE FROM horses WHERE horse_id = {$the_horse_id}";
	$delete_query = mysqli_query($con, $query);
}

?>

