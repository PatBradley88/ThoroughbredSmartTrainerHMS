<?php include("includes/admin_header.php"); ?>


        	<h1 class="pageHeadingBig">Copper Beech Stables Admin </h1>
        	<h1 class="pageHeadingBig">RACE DIARY </h1>

		<?php 

		if(isset($_GET['source'])) {
			$source = $_GET['source'];
		} else {

			$source = '';
		}

		switch($source) {
			case 'addRace';
			include("includes/addRace.php");
			break;

			case 'editRace';
			include("includes/editRace.php");
			break;

			case '200';
			echo "NICE 200";
			break;

			default:

			include("includes/view_all_races.php");

			break;
		}

		?>	
		


        </div>
    </div>
                        
               

<?php include("includes/admin_footer.php"); ?>