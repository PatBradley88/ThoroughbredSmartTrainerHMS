<?php include("includes/includedFiles.php");

if (isset($_GET['id'])) {
     # code...
    $ownerId = $_GET['id'];
 } 
 else {
    header("Location: index.php");
 }

 $owner = new Owner($con, $ownerId);
?>

<div class="entityInfo borderBottom">
    
    <div class="centerSection">

        <div class="ownerInfo">

            <h1 class="ownerName"><?php echo $owner->getOwnerName(); ?></h1>
            <img class="ownerColours" src="<?php echo $owner->getOwnerColours(); ?>">
            
        </div>
        
    </div>

</div>

<div class="ownerInfoContainer borderBottom">
    <h2>CONTACT INFO</h2>
    <div class="ownerContact">
        
        <h3>Address:</h3>
        <h3 class="ownerAddress"><?php echo $owner->getOwnerAddress1(); ?>,<br><?php echo $owner->getOwnerAddress2(); ?>,<br><?php echo $owner->getOwnerAddress3(); ?></h3>
        <br>
        <h3>Email:</h3>
        <h3 class="ownerEmail"><?php echo $owner->getOwnerEmail(); ?></h3>
        <br>
        <h3>Contact No.:</h3>
        <h3><?php echo $owner->getOwnerPhone(); ?></h3>
        

    </div>


</div>

<div class="gridViewContainer">
                <h2>HORSES</h2>
                <?php 
                    $horseQuery = mysqli_query($con, "SELECT * FROM horses WHERE horse_owner_id='$ownerId'");

                    while($row = mysqli_fetch_array($horseQuery)) {
                        echo "<div class='gridViewItem'>
                                <span role='link' tabindex='0' onclick='openPage(\"horseProfile.php?id=" . $row['horse_id'] . "\")'> 
                                <img src='" . $row['horse_image'] . "'>

                                <div class='gridViewInfo'>"
                                    . $row['horse_name'] .
                                "</div>
                                </span>

                            </div>";
                    }
                 ?>

            </div>