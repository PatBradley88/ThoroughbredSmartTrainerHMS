<div id="sideBarContainer">

                    <nav class="sideBar">

                        <span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
                            <img src="images/TSTWht.png">
                        </span>

                        <div class="group">

                            <div class="navItem">
                                <span role="link" tabindex="0" onclick="openPage('search.php')" class="navItemLink">Search
                                    <img src="images/search.png" class="icon" alt="search">
                                </span>
                            </div>

                        </div>

                        <div class="group">
                            
                            <div class="navItem">
                                <span role="link" tabindex="0" class="navItemLink" onclick="openPage('horses.php')"><i class="fas fa-horse-head"></i> Horses</span>
                            </div>
                            <div class="navItem">
                                <span role="link" tabindex="0" onclick="openPage('owner.php')" class="navItemLink"><i class="fas fa-user-friends"></i> Owners</span>
                            </div>
                            <div class="navItem">
                                <!-- <span role="link" tabindex="0" onclick="openPage('admin/index.php')" class="navItemLink">Admin</span> -->
                                <a role="link" tabindex="0" href="admin/index.php" class="navItemLink"><i class="fas fa-tachometer-alt"></i> Admin</a>
                            </div>
                            <div class="navItem">
                                <span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><i class="fas fa-users-cog"></i> <?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
                            </div>

                        </div>
                        
                    </nav>
                    