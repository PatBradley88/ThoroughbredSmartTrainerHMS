<?php include("includes/admin_header.php"); ?>


        	<h1 class="pageHeadingBig">Copper Beech Stables Admin </h1>
        	<h1 class="pageHeadingBig">OTHER APPOINTMENTS </h1>

		<?php 

		if(isset($_GET['source'])) {
			$source = $_GET['source'];
		} else {

			$source = '';
		}

		switch($source) {
			case 'addMisc';
			include("includes/addMisc.php");
			break;

			case 'editMisc';
			include("includes/editMisc.php");
			break;

			default:

			include("includes/view_all_misc.php");

			break;
		}

		?>	
		


        </div>
    </div>
                        
               

<?php include("includes/admin_footer.php"); ?>