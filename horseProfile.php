<?php include("includes/header.php"); 

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

<div class="entityInfo">

    <div class="leftSection">
        <img src="<?php echo $horse->getHorseImage(); ?>">
    </div>
    
    <div class="rightSection">
        <h2><?php echo $horse->getName(); ?></h2>
        <span><?php echo $category->getType(); ?></span><br><br>
        <span>Owner: <?php echo $owner->getOwner(); ?></span>
    </div>

</div>





<?php include("includes/footer.php"); ?>
