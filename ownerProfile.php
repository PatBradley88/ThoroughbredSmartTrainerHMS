<?php include("includes/header.php"); 

if (isset($_GET['id'])) {
    # code...
    $ownerId = $_GET['id'];
    // echo $_GET['id'];
}
else {
    header("Location: index.php");
    // echo "ID not set";
}

$owner = new Owner($con, $ownerId);

// $horse = $owner->getHorse();
?>

<div class="entityInfo">

    <div class="leftSection">
        <img src="<?php echo $owner->getOwnerColours(); ?>">
    </div>
    
    <div class="rightSection">
        <h2><?php echo $owner->getOwner(); ?></h2>
    </div>

</div>





<?php include("includes/footer.php"); ?>
