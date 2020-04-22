<?php include("includes/admin_header.php"); ?>


            <h1 class="pageHeadingBig">Copper Beech Stables Admin </h1>

            <div class="widgetContainer">
            	<div class="card">
            		<div class="face face1">
            			<div class="widgetContent">
            				<img src="../images/bet(1).png">
            				<?php 
            				$query = "SELECT * FROM horses";
            				$select_all_horses = mysqli_query($con, $query);
            				$horse_count = mysqli_num_rows($select_all_horses);
            				echo "<h3>{$horse_count} Horses</h3>"
            				?>
            			</div>
            		</div>
            		<div class="face face2">
            			<div class="widgetContent">
            				<p>Horse in training at 
            				Copper Beech Stables.</p>
            				<a href="../horses.php">Horses</a>
            			</div>
            		</div>
            	</div>
            	<div class="card">
            		<div class="face face1">
            			<div class="widgetContent">
            				<img src="../images/horse(2).png">
            				<?php 
            				$query = "SELECT * FROM owners";
            				$select_all_owners = mysqli_query($con, $query);
            				$owner_count = mysqli_num_rows($select_all_owners);
            				echo "<h3>{$owner_count} Owners</h3>"
            				?>
            			</div>
            		</div>
            		<div class="face face2">
            			<div class="widgetContent">
            				<p>Horse in training at 
            				Copper Beech Stables.</p>
            				<a href="../owner.php">Owners</a>
            			</div>
            		</div>
            	</div>
            	<div class="card">
            		<div class="face face1">
            			<div class="widgetContent">
            				<img src="../images/horse(1).png">
            				<h3>Other</h3>
            			</div>
            		</div>
            		<div class="face face2">
            			<div class="widgetContent">
            				<p>Horse in training at 
            				Copper Beech Stables.</p>
            				<a href="./viewVet.php">Vet</a>
            				<a class="button2" href="./viewFarrier.php">Farrier</a>
            			</div>
            		</div>
            	</div>
            </div>

            <?php  

            $query = "SELECT * FROM horses WHERE category_id = 1";
			$select_colt_cat = mysqli_query($con, $query);
			$cat_colt_counts = mysqli_num_rows($select_colt_cat);

			$query = "SELECT * FROM horses WHERE category_id = 2";
			$select_filly_cat = mysqli_query($con, $query);
			$cat_filly_counts = mysqli_num_rows($select_filly_cat);

			$query = "SELECT * FROM horses WHERE category_id = 3";
			$select_stallion_cat = mysqli_query($con, $query);
			$cat_stallion_counts = mysqli_num_rows($select_stallion_cat);

			$query = "SELECT * FROM horses WHERE category_id = 4";
			$select_mare_cat = mysqli_query($con, $query);
			$cat_mare_counts = mysqli_num_rows($select_mare_cat);

			$query = "SELECT * FROM horses WHERE category_id = 5";
			$select_gelding_cat = mysqli_query($con, $query);
			$cat_gelding_counts = mysqli_num_rows($select_gelding_cat);

            ?>    
			
			<div class="row">
				<script type="text/javascript">
			          google.charts.load('current', {'packages':['bar']});
				      google.charts.setOnLoadCallback(drawChart);

				      function drawChart() {
				        var data = google.visualization.arrayToDataTable([
				          ['Copper Beech Stables', 'Count'],
				          
					          <?php  

					          $element_text = ['Horses', 'Colts', 'Fillys', 'Stallions', 'Mares', 'Geldings'];
					          $element_count = [$horse_count, $cat_colt_counts, $cat_filly_counts, 
					          					$cat_stallion_counts, $cat_mare_counts, $cat_gelding_counts];

					          for($i = 0; $i < 6; $i++) {
	                
	                			echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
	                		   }

					          ?>

				        ]);

				        var options = {
				          chart: {
				            title: '',
				            subtitle: '',
				          },
				          bars: 'vertical',
				          vAxis: {format: 'decimal'},
				          height: 400,
				          backgroundColor: {
				            fill: '#181818'
				          },
				          colors: ['#009879', '#00FFCC', '#00E6B8']
				        };

				        var chart = new google.charts.Bar(document.getElementById('chart_div'));

				        chart.draw(data, google.charts.Bar.convertOptions(options));
				      }
			    </script>
			    <div id="chart_div" class="chart"></div>
			</div>



        </div>
    </div>
                        
               

<?php include("includes/admin_footer.php"); ?>
