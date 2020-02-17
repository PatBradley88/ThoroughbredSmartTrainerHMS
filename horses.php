
<?php 
include("includes/includedFiles.php"); 
?>

                
            <h1 class="pageHeadingBig">Copper Beech Stables <button onclick="openPage('addHorse.php')">ADD HORSE</button></h1>

            <div class="gridViewContainer">
                
                <?php 
                    $horseQuery = mysqli_query($con, "SELECT * FROM horses");

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



        </div>

    </div>
    
</div>
        

        </div>
<!-- img-responsive --> 