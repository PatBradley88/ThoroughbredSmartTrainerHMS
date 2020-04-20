<?php include("includes/admin_header.php"); ?>


        	<h1 class="pageHeadingBig">Copper Beech Stables Admin </h1>

		<?php 

		if(isset($_GET['source'])) {
			$source = $_GET['source'];
		} else {

			$source = '';
		}

		switch($source) {
			case 'addFarrier';
			include("includes/addFarrier.php");
			break;

			case 'editVet';
			include("includes/editFarrier.php");
			break;

			case '200';
			echo "NICE 200";
			break;

			default:

			include("includes/view_all_farrier.php");

			break;
		}

		?>	
		


        </div>
    </div>
                        
               

<?php include("includes/admin_footer.php"); ?>