<?php include("includes/includedFiles.php");  

if (isset($_GET['id'])) {
    # code...
    $horseId = $_GET['id'];
    // echo $_GET['id'];
}
else {
    header("Location: index.php");
    // echo "ID not set";
}

$horse = new Horse($con, $horseId);

$category = $horse->getCategory();
$owner = $horse->getOwner();
?>

<div class="entityInfo borderBottom">
    <h1>Copper Beech Stables</h1>
    <button class="editButton"><a href="admin/viewHorses.php?source=editHorse&h_id={$horse_id}"></a>EDIT HORSE</button>


    <div class="leftSection">
        <img src="<?php echo $horse->getHorseImage(); ?>">
    </div>
    
    <div class="rightSection">
        <h2><?php echo $horse->getName(); ?></h2>
        <span>Category: <?php echo $category->getType(); ?></span><br><br>
        
        <span>Colour: <?php echo $horse->getColour(); ?></span>
        <br><br>
        <span>Sire: <?php echo $horse->getSire(); ?></span>
        <br><br>
        <span>Dam: <?php echo $horse->getDam(); ?></span><br><br>
    </div>

</div>

<div class="horseInfoContainer borderBottom">
    <h2>HISTORY</h2>
    <span>Date of Birth: <?php echo $horse->getDoB(); ?></span>
    <br><br>
    <span>Owner: <?php echo $owner->getOwnerName(); ?></span>
    <br><br>
    <span>Breeder: <?php echo $horse->getBreeder(); ?></span>
    <br><br>
    <span>Received from: <?php echo $horse->getReceivedFrom(); ?></span>
</div>

<div class="horseInfoContainer borderBottom">
    <h2>VET HISTORY</h2>

    <table class="content-table">
        <thead>
            <tr>
                <th>Horse</th>
                <th>Vet Name</th>
                <th>Note</th>
                <th>Posted By</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $query = "SELECT * FROM vet WHERE vet_horse_id = {$horseId}";
                $select_vet = mysqli_query($con, $query);

                while($row = mysqli_fetch_assoc($select_vet)) {
                    $vet_id = $row['vet_id'];
                    $vet_horse_id = $row['vet_horse_id'];
                    $vet_name = $row['vet_name'];
                    $vet_note = $row['vet_note'];
                    $vet_note_poster = $row['vet_note_poster'];
                    $vet_date = $row['vet_date'];
                
            
            echo "<tr>";
                
                $query = "SELECT * FROM horses WHERE horse_id = {$vet_horse_id}";
                $select_horse = mysqli_query($con, $query);

                if (!$select_horse) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_horse)) {
                    $horse_id = $row['horse_id'];
                    $horse_name = $row['horse_name'];
                
                echo "<td>{$horse_name}</td>";
                }

                echo "<td>{$vet_name}</td>";
                echo "<td>{$vet_note}</td>";
                echo "<td>{$vet_note_poster}</td>";
                echo "<td>{$vet_date}</td>";
            echo "</tr>";
            }
            ?>
        </tbody>
        
    </table>
</div>

<div class="horseInfoContainer borderBottom">
    <h2>FARRIER HISTORY</h2>

    <table class="content-table">
        <thead>
            <tr>
                <th>Horse</th>
                <th>Farrier Name</th>
                <th>Note</th>
                <th>Posted By</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $query = "SELECT * FROM farrier WHERE farrier_horse_id = {$horseId}";
                $select_farrier = mysqli_query($con, $query);

                while($row = mysqli_fetch_assoc($select_farrier)) {
                    $farrier_id = $row['farrier_id'];
                    $farrier_horse_id = $row['farrier_horse_id'];
                    $farrier_name = $row['farrier_name'];
                    $farrier_note = $row['farrier_note'];
                    $farrier_note_poster = $row['farrier_note_poster'];
                    $farrier_date = $row['farrier_date'];
                
            
            echo "<tr>";
                
                $query = "SELECT * FROM horses WHERE horse_id = {$farrier_horse_id}";
                $select_horse = mysqli_query($con, $query);

                if (!$select_horse) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_horse)) {
                    $horse_id = $row['horse_id'];
                    $horse_name = $row['horse_name'];
                
                echo "<td>{$horse_name}</td>";
                }

                echo "<td>{$farrier_name}</td>";
                echo "<td>{$farrier_note}</td>";
                echo "<td>{$farrier_note_poster}</td>";
                echo "<td>{$farrier_date}</td>";
            echo "</tr>";
            }
            ?>
        </tbody>
        
    </table>

<?php  

if(isset($_GET['delete'])) {
    $the_farrier_id = $_GET['delete'];

    $query = "DELETE FROM farrier WHERE farrier_id = {$the_farrier_id}";
    $delete_query = mysqli_query($con, $query);
}

?>












<?php include("includes/footer.php"); ?>
