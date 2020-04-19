<?php include("includes/admin_header.php"); ?>


        	<h1 class="pageHeadingBig">Copper Beech Stables Admin </h1>

		<?php 

		if(isset($_GET['source'])) {
			$source = $_GET['source'];
		} else {

			$source = '';
		}

		switch($source) {
			case 'addVet';
			include("includes/addVet.php");
			break;

			case 'editVet';
			include("includes/editVet.php");
			break;

			case '200';
			echo "NICE 200";
			break;

			default:

			include("includes/view_all_vet.php");

			break;
		}

		?>	
		


        </div>
    </div>
                        
               

<?php include("includes/admin_footer.php"); ?>