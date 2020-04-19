

        <header>
            <div class="navContainer">
                <a class="logo" href="../horses.php">Thoroughbred Smart Trainer</a>
                
                <nav class="topNav">
                    <ul>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>    
        </header>
                <div id="sideBarContainer">

                    <nav class="sideBar">

                        <div class="group">
                            
                            <div class="navItem">
                                <span role="link" href="../index.php" class="navItemLink"><i class="fas fa-tachometer-alt"></i> Dashboard</span>
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
                                <span role="link" tabindex="0" class="navItemLink"><i class="fas fa-magnet"></i> Farrier </span>
                            </div>
                            <div class="navItem">
                                <span role="link" tabindex="0" class="navItemLink"><i class="fas fa-stethoscope"></i> Vet</span>
                            </div>
                            <div class="navItem">
                                <span role="link" tabindex="0" class="navItemLink"><i class="fas fa-users-cog"></i> Admin</span>
                            </div>
                            <div class="navItem">
                                <span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"></span>
                            </div>

                        </div>
                        
                    </nav>

          