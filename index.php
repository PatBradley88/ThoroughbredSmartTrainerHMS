
<?php 
include("includes/includedFiles.php"); 
?>

                
            <h1 class="pageHeadingBig">Copper Beech Stables</h1>

            <div class="gridViewContainer">
                
                <?php 
                    $horseQuery = mysqli_query($con, "SELECT * FROM horses");

                    while($row = mysqli_fetch_array($horseQuery)) {
                        echo "<div class='gridViewItem'>
                                <a href='horseProfile.php?id=" . $row['horse_id'] . "'> 
                                <img src='" . $row['horse_image'] . "'>

                                <div class='gridViewInfo'>"
                                    . $row['horse_name'] .
                                "</div>
                                </a>

                            </div>";
                    }
                 ?>

            </div>



        </div>

    </div>
    
</div>
        

        </div>
<!-- img-responsive --> 