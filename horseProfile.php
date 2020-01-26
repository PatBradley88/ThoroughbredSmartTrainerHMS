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

$horseQuery = mysqli_query($con, "SELECT * FROM horses WHERE horse_id = '$horseId'");
$horse = mysqli_fetch_array($horseQuery);


$category = new Category($con, $horse['category']);

echo $horse['horse_name'] . "<br>";
echo $category->getType();

?>





<?php include("includes/footer.php"); ?>
