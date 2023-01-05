<?php
include ('../includes/login-include.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
    header('location: ../index.php');
} elseif ($_SESSION['type'] == 'employee') {
    header('location: employee-dashboard.php');
} elseif (empty($_GET['employee-id'])) {
    header('location:employees-list.php');
} else {
    $searchid = $_GET['employee-id'];
    $sql = "SELECT * FROM `employees` WHERE `ID` = '$searchid'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Employee Profile</title>
    <?php include('header.html');?>
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
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="panel panel-profile">
                        <div class="clearfix">
                            <!-- LEFT COLUMN -->
                            <div class="profile-left">
                                <!-- PROFILE HEADER -->
                                <div class="profile-header">
                                    <div class="overlay"></div>
                                    <div class="profile-main">
                                    <img src='<?php echo "../avatar/" . $row['img_path']; ?>' alt='Avatar' class='img-circle' style='width: 100px; height: 100px;' onerror='this.src="../assets/img/default_avatar.png"'>
                                        <h3 class="name"><?php echo $row['fullname']; ?></h3>
                                    </div>
                                </div>
                                <!-- END PROFILE HEADER -->
                                <!-- PROFILE DETAIL -->
                                <div class="profile-detail">
                                    <div class="profile-info">
                                        <h4 class="heading">Personal & Account Information</h4>
                                        <ul class="list-unstyled list-justify">
                                            <li>Employee ID <span><?php echo $row['ID']; ?></span></li>
                                            <li>Full Name <span><?php echo $row['fullname']; ?></span></li>
                                            <li>Email <span><?php echo $row['email']; ?></span></li>
                                            <li>Password <span>**********</span></li>
                                            <li>Birthdate <span><?php echo $row['birthdate']; ?></span></li>
                                            <li>Gender <span><?php echo $row['gender']; ?></span></li>
                                            <li>Civil Status <span><?php echo $row['civil_status']; ?></span></li>
                                            <li>Educational Background <span><?php echo $row['educational_background']; ?></span></li>
                                            <li>Address <span><?php echo $row['address']; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="text-center"><a href="<?php echo "edit-employee.php?id=".$_GET['employee-id'];?>" class="btn btn-primary">Edit Personal & Account Information</a></div>
                                </div>
                                <!-- END PROFILE DETAIL -->
                            </div>
                            <!-- END LEFT COLUMN -->
                            <!-- RIGHT COLUMN -->
                            <div class="profile-right">
                                <!-- PROFILE DETAIL -->
                                <div class="profile-detail">
                                    <div class="profile-info">
                                        <h4 class="heading">Employee Information</h4>
                                        <ul class="list-unstyled list-justify">
                                            <li>Branch <span><?php echo $row['branch']; ?></span></li>
                                            <li>Department <span><?php echo $row['department']; ?></span></li>
                                            <li>Position <span><?php echo $row['position']; ?></span></li>
                                            <li>Date Hired <span><?php echo $row['date_hired']; ?></span></li>
                                            <li>Status <span><?php echo $row['status'];?></span></li>
                                            <hr>
                                            <li>Salary Rate <span>&#x20B1; <?php echo $row['salary_rate']; ?></span></li>
                                            <li>Allowance <span>&#x20B1; <?php echo $row['allowance']; ?></span></li>
                                            <li>COLA <span>&#x20B1; <?php echo $row['COLA']; ?></span></li>
                                            <li>Tax <span>&#x20B1; <?php echo $row['tax']; ?></span></li>
                                            <li>SSS Premium <span>&#x20B1; <?php echo $row['SSS_Premium']; ?></span></li>
                                            <li>SSS Loan <span>&#x20B1; <?php echo $row['SSS_Loan']; ?></span></li>
                                            <li>MDMF Premium <span>&#x20B1; <?php echo $row['MDMF_Premium']; ?></span></li>
                                            <li>MDMF Loan <span>&#x20B1; <?php echo $row['MDMF_Loan']; ?></span></li>
                                            <li>MDMF Housing <span>&#x20B1; <?php echo $row['MDMF_Housing']; ?></span></li>
                                            <li>MDMF 2 <span>&#x20B1; <?php echo $row['MDMF_2']; ?></span></li>
                                            <li>PHIC Premium <span>&#x20B1; <?php echo $row['PHIC_Premium']; ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END RIGHT COLUMN -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <?php include('scripts.html');?>
</body>

</html>
