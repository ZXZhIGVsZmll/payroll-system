<?php
include ('../includes/login-include.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
	header('location: ../index.php');
} elseif ($_SESSION['type'] == 'admin') {
	header('location: ../admin/dashboard.php');
}

?>
<!doctype html>
<html lang="en">

    <head>
        <title>About</title>
        <?php include('header.html');?>
    </head>

    <body>
        <div id="wrapper">
            <?php
            include('navbar.php');
            include('sidebar.html');
            ?>
            <!-- MAIN -->
            <div class="main about">
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <!--  -->
                            </div>
                            <div class="panel-body">
                                <p class="title">MISSION</p>
                                <p class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat eros vel posuere dapibus. Donec finibus hendrerit turpis, nec
                                malesuada purus vehicula eget. Praesent blandit, orci non finibus malesuada, lacus lorem feugiat orci, id aliquet quam nisl vel lectus.
                                Vestibulum interdum lectus sapien, non tristique lectus tempor eu. Ut tristique tincidunt leo, non vestibulum purus aliquam sed.
                                Vestibulum egestas urna neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce id dui
                                vehicula, fermentum neque nec, semper odio.
                                </p>
                                <br>
                                <br>
                                <p class="title">VISION</p>
                                <p  class="content">
                                Nam mollis at odio ac consequat. Pellentesque laoreet nisi vel enim placerat, et pulvinar felis tempus. Nullam fringilla mauris ut euismod
                                hendrerit. Vivamus venenatis velit at malesuada tristique. Nunc auctor dictum dui nec hendrerit. Pellentesque sed quam turpis. In auctor
                                magna vitae lacus volutpat, sed varius eros malesuada. Praesent fermentum accumsan ante quis interdum. Donec vulputate ante
                                sed mattis ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam pulvinar luctus diam, in laoreet
                                ex volutpat at.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN -->
        </div>
        <!-- Javascript -->
        <?php include('scripts.html');?>
    </body>

</html>
