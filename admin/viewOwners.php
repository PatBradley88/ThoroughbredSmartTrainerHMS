<?php include("includes/admin_header.php"); ?>


        	<h1 class="pageHeadingBig">Copper Beech Stables Admin </h1>
        	<h1 class="pageHeadingBig">OWNERS </h1>

		<?php 

		if(isset($_GET['source'])) {
			$source = $_GET['source'];
		} else {

			$source = '';
		}

		switch($source) {
			case 'addOwner';
			include("includes/addOwner.php");
			break;

			case 'editOwner';
			include("includes/editOwner.php");
			break;

			case '200';
			echo "NICE 200";
			break;

			default:

			include("includes/view_all_owners.php");

			break;
		}

		?>	
		


        </div>
    </div>
                        
               

<?php include("includes/admin_footer.php"); ?>