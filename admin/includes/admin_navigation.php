                <div id="sideBarContainer">

                    <nav class="sideBar">

                        <a role="link" tabindex="0" href="../index.php" class="logo">
                            <img src="images/TSTWht.png">
                        </a>

                        <ul>
                            <li><a href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                            <li>
                                <a href="#" class="horse-btn"><i class="fas fa-horse-head"></i> Horses
                                    <span class="fas fa-caret-down first"></span>
                                </a>
                                <ul class="horse-show">
                                    <li><a href="./viewHorses.php">View all Horses</a></li>
                                    <li><a href="./viewHorses.php?source=addHorse">Add Horse</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="owner-btn"><i class="fas fa-user-friends"></i> Owners
                                    <span class="fas fa-caret-down second"></span>
                                </a>
                                <ul class="owner-show">
                                    <li><a href="./viewOwners.php">View all Owners</a></li>
                                    <li><a href="./viewOwners.php?source=addOwner">Add Owner</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="race-btn"><i class="fas fa-horse"></i> Race Diary
                                    <span class="fas fa-caret-down third"></span>
                                </a>
                                <ul class="race-show">
                                    <li><a href="./viewRaces.php">View all Races</a></li>
                                    <li><a href="./viewRaces.php?source=addRace">Add Race</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="vet-btn"><i class="fas fa-stethoscope"></i> Vet Diary
                                    <span class="fas fa-caret-down fourth"></span>
                                </a>
                                <ul class="vet-show">
                                    <li><a href="./viewVet.php">View all Vet</a></li>
                                    <li><a href="./viewVet.php?source=addVet">Add Vet</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="farrier-btn"><i class="fas fa-magnet"></i> Farrier Diary
                                    <span class="fas fa-caret-down fifth"></span>
                                </a>
                                <ul class="farrier-show">
                                    <li><a href="./viewFarrier.php">View all Farrier</a></li>
                                    <li><a href="./viewFarrier.php?source=addFarrier">Add Farrier</a></li>
                                </ul>
                            </li>
                            <li><a href="../settings.php"><i class="fas fa-users-cog"></i> Settings</a></li>
                        </ul>
                    </nav>
                    <script>
                        // function myOwnFunc() {
                        //   var x = document.getElementById("owners");
                        //   if (x.className.indexOf("w3-show") == -1) {
                        //     x.className += " w3-show";
                        //     x.previousElementSibling.className += " #009879";
                        //   } else { 
                        //     x.className = x.className.replace(" w3-show", "");
                        //     x.previousElementSibling.className = 
                        //     x.previousElementSibling.className.replace(" #009879", "");
                        //   }
                        // }

                        // function myRaceFunc() {
                        //   var x = document.getElementById("races");
                        //   if (x.className.indexOf("w3-show") == -1) {
                        //     x.className += " w3-show";
                        //     x.previousElementSibling.className += " #009879";
                        //   } else { 
                        //     x.className = x.className.replace(" w3-show", "");
                        //     x.previousElementSibling.className = 
                        //     x.previousElementSibling.className.replace(" #009879", "");
                        //   }
                        // }
                        $('.horse-btn').click(function() {
                            $('nav ul .horse-show').toggleClass("show");
                            $('nav ul .first').toggleClass("rotate");
                        });

                        $('.owner-btn').click(function() {
                            $('nav ul .owner-show').toggleClass("show1");
                            $('nav ul .second').toggleClass("rotate");
                        });

                        $('.race-btn').click(function() {
                            $('nav ul .race-show').toggleClass("show2");
                            $('nav ul .third').toggleClass("rotate");
                        });

                        $('.vet-btn').click(function() {
                            $('nav ul .vet-show').toggleClass("show3");
                            $('nav ul .fourth').toggleClass("rotate");
                        });

                        $('.farrier-btn').click(function() {
                            $('nav ul .farrier-show').toggleClass("show4");
                            $('nav ul .fifth').toggleClass("rotate");
                        });

                        $('nav ul li').click(function() {
                            $(this).addClass("active").siblings().removeClass("active");
                        })

                    </script>

          