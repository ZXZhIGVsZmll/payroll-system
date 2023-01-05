<?php
include ('../includes/login-include.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
    header('location: ../index.php');
} elseif ($_SESSION['type'] == 'employee') {
    header('location: employee-dashboard.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <?php
    include('header.html');
    ?>
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <?php
        include('navbar.php');
        include('sidebar.html');
        ?>
        <!-- MAIN -->
        <div class="main">
            <br>
            <div style="margin:auto; width:50%; text-align:center;">TODO</div>
        </div>
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <?php
    include('scripts.html');
    ?>
</body>

</html>
