
<?php 
include("includes/includedFiles.php"); 
?>

                
            <h1 class="pageHeadingBig">Copper Beech Stables</h1>

            <div class="gridViewContainer">
                
                <?php 
                    $ownerQuery = mysqli_query($con, "SELECT * FROM owners");

                    while($row = mysqli_fetch_array($ownerQuery)) {
                        echo "<div class='gridViewItem'>
                                <span role='link' tabindex='0' onclick='openPage(\"ownerProfile.php?id=" . $row['owner_id'] . "\")'> 
                                <img src='" . $row['owner_colours'] . "'>

                                <div class='gridViewInfo'>"
                                    . $row['name'] .
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