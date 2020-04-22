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




        </div>
    </div>
                        
               

<?php include("includes/admin_footer.php"); ?>
