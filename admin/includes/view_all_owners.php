<table class="content-table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Address 1</th>
			<th>Address 2</th>
			<th>Address 3</th>
			<th>Email</th>
			<th>Contact no.</th>
			<th>Racing Colours</th>
			<th>Horses in Training</th>
			<th>Training Status</th>
			<th>Date Added</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$query = "SELECT * FROM owners";
			$select_owners = mysqli_query($con, $query);

			while($row = mysqli_fetch_assoc($select_owners)) {
				$owner_id = $row['owner_id'];
				$name = $row['name'];
				$address1 = $row['address1'];
				$address2 = $row['address2'];
				$address3 = $row['address3'];
				$email = $row['email'];
				$contactNo = $row['contactNo'];
				$owner_colours = $row['owner_colours'];
				$horses = $row['horses'];
				$training_status = $row['training_status'];
				$added_date = $row['added_date'];
			
		
		echo "<tr>";
			echo "<td>{$name}</td>";
			echo "<td>{$address1}</td>";
			echo "<td>{$address2}</td>";
			echo "<td>{$address3}</td>";
			echo "<td>{$email}</td>";
			echo "<td>{$contactNo}</td>";
			echo "<td><img width='80' src='../$owner_colours' alt='image'></td>";
			echo "<td>{$horses}</td>";
			echo "<td>{$training_status}</td>";
			echo "<td>{$added_date}</td>";
			echo "<td><a href='#'><i class='fas fa-edit'></i></a></td>";
			echo "<td><a href='viewOwners.php?delete={$owner_id}'><i class='far fa-trash-alt'></i></a></td>";
		echo "</tr>";
		}
		?>
	</tbody>
	
</table>

<?php  

if(isset($_GET['delete'])) {
	$the_owner_id = $_GET['delete'];

	$query = "DELETE FROM owners WHERE owner_id = {$the_owner_id}";
	$delete_query = mysqli_query($con, $query);
}

?>







