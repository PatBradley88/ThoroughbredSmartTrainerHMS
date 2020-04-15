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
    <button class="editButton" onclick="openPage('updateHorse.php')">EDIT HORSE</button>


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

<div class="horseInfoContainer">
    <h2>HISTORY</h2>
    <span>Date of Birth: <?php echo $horse->getDoB(); ?></span>
    <br><br>
    <span>Owner: <?php echo $owner->getOwnerName(); ?></span>
    <br><br>
    <span>Breeder: <?php echo $horse->getBreeder(); ?></span>
    <br><br>
    <span>Received from: <?php echo $horse->getReceivedFrom(); ?></span>
    


</div>





<?php include("includes/footer.php"); ?>
