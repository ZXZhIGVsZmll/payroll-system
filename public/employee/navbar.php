 <!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="about.php"><img src="../assets/img/logoipsum-261-banner-nav.png" alt="Logo" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right white-bg-on-focus">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src='<?php echo "../avatar/" . $_SESSION['img'];?>' class='img-circle' alt='Avatar' onerror='this.src="../assets/img/default_avatar.png"'>
                        <span>
                            <?php echo $_SESSION['email'];?>
                        </span>
                        <i class="icon-submenu lnr lnr-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php">
                                <i class="lnr lnr-user"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="edit-profile.php">
                                <i class="lnr lnr-pencil"></i>
                                <span>Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="payslips.php">
                                <i class="lnr lnr-book"></i>
                                <span>My Payslips</span>
                            </a>
                        </li>
                        <li>
                            <a href="../includes/logout.php">
                                <i class="lnr lnr-exit"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
