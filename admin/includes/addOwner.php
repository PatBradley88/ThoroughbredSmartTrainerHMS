<?php 
if(isset($_POST['add_owner'])) {
	$name = $_POST['name'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$address3 = $_POST['address3'];
	$email = $_POST['email'];
	$contactNo = $_POST['contactNo'];

	$owner_colours = $_FILES['image']['name'];
	$owner_colours_temp = $_FILES['image']['tmp_name'];

	$training_status = $_POST['training_status'];
	$added_date = date('m.d.y');

	move_uploaded_file($owner_colours_temp, "../images/ownerColours/$owner_colours");

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$address1 = mysqli_real_escape_string($con, $_POST['address1']);
	$address2 = mysqli_real_escape_string($con, $_POST['address2']);
	$address3 = mysqli_real_escape_string($con, $_POST['address3']);

	$query = "INSERT INTO owners(name, address1, address2, address3,
								email, contactNo, owner_colours,
								 training_status, added_date)";

	$query .= "VALUES('{$name}', '{$address1}', '{$address2}', '{$address3}', '{$email}',
			'{$contactNo}', 'images/ownerColours/{$owner_colours}', '{$training_status}', now())";


	$create_owner_query = mysqli_query($con, $query);

	 if (!$create_owner_query) {

      die ("Query Failed" . mysqli_error($con));

    }
}

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>OWNER DETAILS</h2>
		<input type="text" name="name" placeholder="Name" value="">
		<input type="text" name="address1" placeholder="Address 1" value="">
		<input type="text" name="address2" placeholder="Address 2" value="">
		<input type="text" name="address3" placeholder="Address 3" value="">
		<input type="email" name="email" placeholder="Email" value="">
		<input type="text" name="contactNo" placeholder="Contact no." value="">
		<input type="file" name="image" placeholder="Upload Image" value="">
	</div>

	<div class="container">
		<h2>TRAINING STATUS</h2>
		<!-- <input type="text" name="training_status" placeholder="Training Status" value=""> -->
		<label for="training_status">Training Status</label>
        <select name="training_status" id="horse_dropdown">
           <option value="Active">Select Options</option>
           <option value="Active">Active</option>
           <option value="Inactive">Inactive</option>
        </select>
		<button class="button" onclick="" name="add_owner">ADD OWNER</button>
	</div>
	
</div>

</form>
