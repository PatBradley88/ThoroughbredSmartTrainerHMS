<?php  
	
	if(isset($_GET['o_id'])) {
		$the_owner_id = $_GET['o_id'];
	}

	$query = "SELECT * FROM owners WHERE owner_id = {$the_owner_id}";
	$select_owners_by_id = mysqli_query($con, $query);

	while($row = mysqli_fetch_assoc($select_owners_by_id)) {
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
	}

	if(isset($_POST['update_owner'])) {
		
		$name = $_POST['name'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$address3 = $_POST['address3'];
		$email = $_POST['email'];
		$contactNo = $_POST['contactNo'];
		$training_status = $_POST['training_status'];

		$name = mysqli_real_escape_string($con, $_POST['name']);
		$address1 = mysqli_real_escape_string($con, $_POST['address1']);
		$address2 = mysqli_real_escape_string($con, $_POST['address2']);
		$address3 = mysqli_real_escape_string($con, $_POST['address3']);

		if(empty($owner_colours)) {
			$query = "SELECT * FROM owners WHERE owner_id = $the_owner_id";
			$select_image = mysqli_query($con, $query);

			while($row = mysqli_fetch_array($select_image)) {
				$owner_colours = $row['owner_colours'];
			}
		}

		$query = "UPDATE owners SET ";
		$query .="name = '{$name}', ";
		$query .="address1 = '{$address1}', ";
		$query .="address2 = '{$address2}', ";
		$query .="address3 = '{$address3}', ";
		$query .="email = '{$email}', ";
		$query .="contactNo = '{$contactNo}', ";
		$query .="horses = '{$horses}', ";
		$query .="training_status = '{$training_status}', ";
		$query .="added_date = now() ";
		$query .= "WHERE owner_id = {$the_owner_id} ";

		$update_owner = mysqli_query($con, $query);

		if (!$update_owner) {

		      die ("Query Failed" . mysqli_error($con));

		    }
		    
		}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>OWNER DETAILS</h2>
		<input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
		<input type="text" name="address1" placeholder="Address 1" value="<?php echo $address1; ?>">
		<input type="text" name="address2" placeholder="Address 2" value="<?php echo $address2; ?>">
		<input type="text" name="address3" placeholder="Address 3" value="<?php echo $address3; ?>">
		<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
		<input type="text" name="contactNo" placeholder="Contact no." value="<?php echo $contactNo; ?>">
		<img width="100" src="../<?php echo $owner_colours; ?>" alt="">
		<!-- <input type="file" name="image"> -->
	</div>

	<div class="container">
		<h2>TRAINING STATUS</h2>
		<!-- <input type="text" name="training_status" placeholder="Training Status" value="<?php echo $training_status; ?>"> -->
		<label for="training_status">Training Status</label>
        <select name="training_status" id="horse_dropdown">
           <option value="Active"><?php echo $training_status; ?></option>
            <?php 
            if ($training_status == 'Active') {
                
                echo "<option 
                value='Inactive'>Inactive</option>";
            
            } else {
                
                echo "<option value='Active'>Active</option>";
            
            }
    
            ?>
        </select>
		<button class="button" onclick="" value="Update Owner" name="update_owner">UPDATE OWNER</button>
	</div>
	
</div>

</form>