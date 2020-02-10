<?php  
include("includes/includedFiles.php");

if (isset($_GET['term'])) {
	$term = urldecode($_GET['term']);
}
else {
	$term = "";
}
?>

<div class="searchContainer">

	<h4>Search for a Horse or an Owner</h4>
	<input type="text" class="searchInput" value="<?php echo $term; ?>" placeholder="Start typing..." onfocus="this.selectionStart = this.selectionEnd = this.value.length;">
	
</div>

<script>

$(".searchInput").focus();
	
$(function() {
	

	$(".searchInput").keyup(function() {
		clearTimeout(timer);

		timer = setTimeout(function() {
			var val = $(".searchInput").val();
			openPage("search.php?term=" + val);
		}, 2000);
	})
})

</script>

<?php if($term == "") exit(); ?>


<div class="ownersContainer borderBottom">
	
	<h2>OWNERS</h2>

	<?php 
	$ownerQuery = mysqli_query($con, "SELECT * FROM owners WHERE name LIKE '$term%' LIMIT 10");

	if(mysqli_num_rows($ownerQuery) == 0) {
		echo "<span class='noResults'>No owners found matching " . $term . "</span>";
	}

	while ($row = mysqli_fetch_array($ownerQuery)) {
		// $ownerFound = new Owner($con, $row['owner_id']);

		// echo "<div class='searchResultRow'>
		// 		<div class='ownerName'>
		// 			<span role='link' tabindex='0' onclick='openPage(\"ownerProfile.php?id=" . $ownerFound->getId() ."\")'>
		// 			"
		// 			. $ownerFound->getOwnerName() .
		// 			"
		// 			</span>
		// 		</div>
				
		// 	</div>";

		echo "<div class='gridViewItem'>
                <span role='link' tabindex='0' onclick='openPage(\"ownerProfile.php?id=" . $row['owner_id'] . "\")'> 
                <img src='" . $row['owner_colours'] . "'>

                <div class='gridViewInfo'>"
                    . $row['name'] .
                "</div>
                </span>

            </div>";

	}

	?>

</div>

<div class="gridViewContainer">

	<h2>HORSES</h2>
                
                <?php 
                    $horseQuery = mysqli_query($con, "SELECT * FROM horses WHERE horse_name LIKE '$term%' LIMIT 10");

                    if(mysqli_num_rows($horseQuery) == 0) {
						echo "<span class='noResults'>No horses found matching " . $term . "</span>";
					}

                    while($row = mysqli_fetch_array($horseQuery)) {
                        echo "<div class='gridViewItem'>
                                <span role='link' tabindex='0' onclick='openPage(\"horseProfile.php?id=" . $row['horse_id'] . "\")'> 
                                <img src='" . $row['horse_image'] . "'>

                                <div class='gridViewInfo'>"
                                    . $row['horse_name'] .
                                "</div>
                                </span>

                            </div>";
                    }
                 ?>

            </div>













