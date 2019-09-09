        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item <?php if($subTitle =="Leagues") { echo "active"; } ?>">
                <a class="nav-link" href="leagues.php">
                    <i class="fas fa-futbol"></i>
                    <span>Leagues</span>
                </a>
            </li>
            <li class="nav-item <?php if($subTitle =="Teams") { echo "active"; } ?>">
                <a class="nav-link" href="teams.php">
                    <i class="fas fa-users-cog"></i>
                    <span>Teams</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-tools"></i>
                    <span>Admin</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Teams:</h6>
                    <a class="dropdown-item" href="team.php">Add New Team</a>
                </div>
            </li>
            <li class="nav-item">
                <!-- Place holder for future-->
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contacts</span></a>
            </li>
        </ul>