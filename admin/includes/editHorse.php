<form action="" method="post" enctype="multipart/form-data">

<div class="horseDetails">

	<div class="container borderBottom">
		<h2>HORSE DETAILS</h2>
		<input type="text" name="horse_name" placeholder="Horse Name" value="">
		<input type="file" name="image" placeholder="Upload Image" value="">
		<input type="text" name="category_id" placeholder="Sex" value="">
		<label for="dateOfBirth">Date of Birth</label>
		<input type="date" name="dateOfBirth" placeholder="Date of Birth" value="">
		<input type="text" name="colour" placeholder="Colour" value="">
		<input type="text" name="passport_no" placeholder="Passport No." value="">
		<input type="text" name="sire" placeholder="Sire" value="">
		<input type="text" name="dam" placeholder="Dam" value="">
	</div>

	<div class="container borderBottom">
		<h2>HORSE HISTORY</h2>
		<input type="text" name="owner_id" placeholder="Owner Name" value="">
		<input type="text" name="breeder" placeholder="Breeder" value="">
		<input type="text" name="received_from" placeholder="Received From" value="">
	</div>

	<div class="container">
		<h2>HORSE HISTORY</h2>
		<input type="text" name="training_status" placeholder="Training Status" value="">
		<button class="button" onclick="" name="add_horse">ADD HORSE</button>
	</div>
	
</div>

</form>