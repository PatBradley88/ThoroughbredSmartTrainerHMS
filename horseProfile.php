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
    <!-- <button class="editButton"><a href="viewHorses.php?source=editHorse&h_id={$horseId}"></a>EDIT HORSE</button> -->


    <div class="leftSection">
        <img src="<?php echo $horse->getHorseImage(); ?>">
    </div>
    
    <div class="rightSection">
        <h2><?php echo $horse->getName(); ?></h2>
        <span><b>Category:</b> <em><?php echo $category->getType(); ?></em></span><br><br>
        
        <span><b>Colour:</b> <em><?php echo $horse->getColour(); ?></em></span>
        <br><br>
        <span><b>Sire:</b> <em><?php echo $horse->getSire(); ?></em></span>
        <br><br>
        <span><b>Dam:</b> <em><?php echo $horse->getDam(); ?></em></span><br><br>
    </div>

    <div class="raceColours">
        <img src="<?php echo $owner->getOwnerColours(); ?>">
    </div>

</div>

<div class="horseInfoContainer borderBottom">
    <h2>HISTORY</h2>
    <span><b>Date of Birth:</b> <em><?php echo $horse->getDoB(); ?></em></span>
    <br><br>
    <span><b>Passport No:</b> <em><?php echo $horse->getPassport(); ?></em></span>
    <br><br>
    <span><b>Owner:</b> <em><?php echo $owner->getOwnerName(); ?></em></span>
    <br><br>
    <span><b>Breeder:</b> <em><?php echo $horse->getBreeder(); ?></em></span>
    <br><br>
    <span><b>Received from:</b> <em><?php echo $horse->getReceivedFrom(); ?></em></span>
    <br><br>
    <span><b>Training Status:</b> <em><?php echo $horse->getTrainingStatus(); ?></em></span><br><br>
</div>
<br>

<div class="horseInfoContainer borderBottom">
    <h2>RACE DIARY</h2>

    <table class="content-table">
        <thead>
            <tr>
                <th>Horse Name</th>
                <th>Country</th>
                <th>Racecourse</th>
                <th>Date of Race</th>
                <th>Race No.</th>
                <th>Race Name</th>
                <th>Race Status</th>
                <th>Distance</th>
                <th>Age & Category</th>
                <th>Fee</th>
                <th>Declaration Date</th>
                <th>Finish Position</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $query = "SELECT * FROM races WHERE race_horse_id = {$horseId}";
                $select_races = mysqli_query($con, $query);

                while($row = mysqli_fetch_assoc($select_races)) {
                    $race_id = $row['race_id'];
                    $race_horse_id = $row['race_horse_id'];
                    $race_country_id = $row['race_country_id'];
                    $race_racecourse_id = $row['race_racecourse_id'];
                    $race_date = $row['race_date'];
                    $race_no = $row['race_no'];
                    $race_name = $row['race_name'];
                    $race_status_id = $row['race_status_id'];
                    $race_distance_id = $row['race_distance_id'];
                    $race_age_cat_id = $row['race_age_cat_id'];
                    $fee = $row['fee'];
                    $declaration_date = $row['declaration_date'];
                    $finish_pos = $row['finish_pos'];
                
            
            echo "<tr>";

                $query = "SELECT * FROM horses WHERE horse_id = {$race_horse_id}";
                $select_horse = mysqli_query($con, $query);

                if (!$select_horse) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_horse)) {
                    $horse_id = $row['horse_id'];
                    $horse_name = $row['horse_name'];
                
                echo "<td>{$horse_name}</td>";
                }

                $query = "SELECT * FROM racecourse_country WHERE country_id = {$race_country_id}";
                $select_country = mysqli_query($con, $query);

                if (!$select_country) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_country)) {
                    $country_id = $row['country_id'];
                    $country = $row['country'];
                
                echo "<td>{$country}</td>";
                }

                $query = "SELECT * FROM racecourse WHERE racecourse_id = {$race_racecourse_id}";
                $select_racecourse = mysqli_query($con, $query);

                if (!$select_racecourse) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_racecourse)) {
                    $racecourse_id = $row['racecourse_id'];
                    $racecourse = $row['racecourse'];
                
                echo "<td>{$racecourse}</td>";
                }

                echo "<td>{$race_date}</td>";
                echo "<td>{$race_no}</td>";
                echo "<td>{$race_name}</td>";

                $query = "SELECT * FROM race_status WHERE status_id = {$race_status_id}";
                $select_status = mysqli_query($con, $query);

                if (!$select_status) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_status)) {
                    $status_id = $row['status_id'];
                    $status = $row['status'];
                
                echo "<td>{$status}</td>";
                }

                $query = "SELECT * FROM race_distance WHERE distance_id = {$race_distance_id}";
                $select_distance = mysqli_query($con, $query);

                if (!$select_distance) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_distance)) {
                    $distance_id = $row['distance_id'];
                    $race_distance = $row['race_distance'];
                
                echo "<td>{$race_distance}</td>";
                }

                $query = "SELECT * FROM age_cat WHERE age_cat_id = {$race_age_cat_id}";
                $select_age_cat = mysqli_query($con, $query);

                if (!$select_age_cat) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_age_cat)) {
                    $age_cat_id = $row['age_cat_id'];
                    $age_cat = $row['age_cat'];
                
                echo "<td>{$age_cat}</td>";
                }

                echo "<td>{$fee}</td>";
                echo "<td>{$declaration_date}</td>";
                echo "<td>{$finish_pos}</td>";

            echo "</tr>";
            }
            ?>
        </tbody>
        
    </table>
</div>
<br>

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

                $query = "SELECT * FROM users WHERE id = {$vet_note_poster}";
                $select_user = mysqli_query($con, $query);

                if (!$select_user) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_user)) {
                    $id = $row['id'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];

                echo "<td>{$firstName} {$lastName}</td>";
                }

                // echo "<td>{$vet_note_poster}</td>";
                echo "<td>{$vet_date}</td>";
            echo "</tr>";
            }
            ?>
        </tbody>
        
    </table>
</div>
<br>

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

                $query = "SELECT * FROM users WHERE id = {$farrier_note_poster}";
                $select_user = mysqli_query($con, $query);

                if (!$select_user) {

                  die ("Query Failed" . mysqli_error($con));

                }
                while($row = mysqli_fetch_assoc($select_user)) {
                    $id = $row['id'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];

                echo "<td>{$firstName} {$lastName}</td>";
                }
                // echo "<td>{$farrier_note_poster}</td>";
                echo "<td>{$farrier_date}</td>";
            echo "</tr>";
            }
            ?>
        </tbody>
        
    </table>

</div>
<br>

    <div class="horseInfoContainer borderBottom">
    <h2>OTHER THERAPYS HISTORY</h2>

    <table class="content-table">
    <thead>
        <tr>
            <th>Horse</th>
            <th>Therapy Type</th>
            <th>Therapist Name</th>
            <th>Note</th>
            <th>Posted By</th>
            <th>Date Added</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $query = "SELECT * FROM misc_apps WHERE misc_horse_id = {$horseId}";
            $select_misc = mysqli_query($con, $query);

            while($row = mysqli_fetch_assoc($select_misc)) {
                $misc_id = $row['misc_id'];
                $misc_horse_id = $row['misc_horse_id'];
                $therapy_type = $row['therapy_type'];
                $therapist_name = $row['therapist_name'];
                $misc_note = $row['misc_note'];
                $misc_note_poster = $row['misc_note_poster'];
                $date_added = $row['date_added'];
            
        
        echo "<tr>";
            
            $query = "SELECT * FROM horses WHERE horse_id = {$misc_horse_id}";
            $select_horse = mysqli_query($con, $query);

            if (!$select_horse) {

              die ("Query Failed" . mysqli_error($con));

            }
            while($row = mysqli_fetch_assoc($select_horse)) {
                $horse_id = $row['horse_id'];
                $horse_name = $row['horse_name'];
            
            echo "<td>{$horse_name}</td>";
            }

            $query = "SELECT * FROM appointment_type WHERE appoint_id = {$therapy_type}";
            $select_therapy = mysqli_query($con, $query);

            if (!$select_therapy) {

              die ("Query Failed" . mysqli_error($con));

            }
            while($row = mysqli_fetch_assoc($select_therapy)) {
                $appoint_id = $row['appoint_id'];
                $appoint_type = $row['appoint_type'];
            
            echo "<td>{$appoint_type}</td>";
            }

            echo "<td>{$therapist_name}</td>";
            echo "<td>{$misc_note}</td>";

            $query = "SELECT * FROM users WHERE id = {$misc_note_poster}";
            $select_user = mysqli_query($con, $query);

            if (!$select_user) {

              die ("Query Failed" . mysqli_error($con));

            }
            while($row = mysqli_fetch_assoc($select_user)) {
                $id = $row['id'];
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];

            echo "<td>{$firstName} {$lastName}</td>";
            }
            
            echo "<td>{$date_added}</td>";

        echo "</tr>";
        }
        ?>
    </tbody>
    
</table>


<?php include("includes/footer.php"); ?>
