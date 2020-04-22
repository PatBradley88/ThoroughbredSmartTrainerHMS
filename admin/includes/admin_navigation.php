                <div id="sideBarContainer">

                    <nav class="sideBar">

                        <a role="link" tabindex="0" href="../index.php" class="logo">
                            <img src="images/TSTWht.png">
                        </a>

                        <div class="group">
                            
                            <div class="navItem">
                                <a href="index.php" class="navItemLink"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                            </div>
                            <div class="navItem">
                                <span role="link" href="javascript:;" data-toggle="collapse" data-target="#horse_dropdown" class="navItemLink"><i class="fas fa-horse-head"></i> Horses </i></span>
                                    <ul id="horse_dropdown" class="collapse">
                                        <li>
                                            <a role="link" href="./viewHorses.php" class="navItemLink">View All Horses</a>
                                        </li>
                                        <li>
                                            <a role="link" href="./viewHorses.php?source=addHorse" class="navItemLink">Add Horse</a>
                                        </li>
                                    </ul>
                            </div>
                            <div class="navItem">
                                <span role="link" href="javascript:;" data-toggle="collapse" data-target="#horse_dropdown" class="navItemLink"><i class="fas fa-user-secret"></i> Owners </i></span>
                                    <ul id="horse_dropdown" class="collapse">
                                        <li>
                                            <a role="link" href="./viewOwners.php" class="navItemLink">View All Owners</a>
                                        </li>
                                        <li>
                                            <a role="link" href="./viewOwners.php?source=addOwner" class="navItemLink">Add Owner</a>
                                        </li>
                                    </ul>
                            </div>
                            <div class="navItem">
                                <span role="link" tabindex="0" class="navItemLink"><i class="fas fa-horse"></i> Categories </span>
                            </div>
                            <div class="navItem">
                                <span role="link" href="javascript:;" data-toggle="collapse" data-target="#horse_dropdown" class="navItemLink"><i class="fas fa-magnet"></i> Farrier </i></span>
                                    <ul id="horse_dropdown" class="collapse">
                                        <li>
                                            <a role="link" href="./viewFarrier.php" class="navItemLink">View All Farrier Notes</a>
                                        </li>
                                        <li>
                                            <a role="link" href="./viewFarrier.php?source=addFarrier" class="navItemLink">Add Farrier Note</a>
                                        </li>
                                    </ul>
                            </div>
                            <div class="navItem">
                                <span role="link" href="javascript:;" data-toggle="collapse" data-target="#horse_dropdown" class="navItemLink"><i class="fas fa-stethoscope"></i> Vet </i></span>
                                    <ul id="horse_dropdown" class="collapse">
                                        <li>
                                            <a role="link" href="./viewVet.php" class="navItemLink">View All Vet Notes</a>
                                        </li>
                                        <li>
                                            <a role="link" href="./viewVet.php?source=addVet" class="navItemLink">Add Vet Note</a>
                                        </li>
                                    </ul>
                            </div>
                            <div class="navItem">
                                <span role="link" tabindex="0" class="navItemLink"><i class="fas fa-users-cog"></i> Admin</span>
                            </div>
                            <div class="navItem">
                                <span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"></span>
                            </div>

                        </div>
                        
                    </nav>

          