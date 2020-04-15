<?php include("includes/admin_header.php"); ?>


        	<h1 class="pageHeadingBig">Copper Beech Stables Admin </h1>

		<?php 

		if(isset($_GET['source'])) {
			$source = $_GET['source'];
		} else {

			$source = '';
		}

		switch($source) {
			case 'addHorse';
			include("includes/addHorse.php");
			break;

			case '100';
			echo "NICE 100";
			break;

			case '200';
			echo "NICE 200";
			break;

			default:

			include("includes/view_all_horses.php");

			break;
		}

		?>	
		


        </div>
    </div>
                        
               

<?php include("includes/admin_footer.php"); ?>