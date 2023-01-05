<?php
include ('../includes/login-include.php');
include ('../includes/edit-profile.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
    header('location: ../index.php');
} elseif ($_SESSION['type'] == 'admin') {
    header('location: ../admin/dashboard.php');
} else {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM `employees` WHERE `email` = '$email'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
}

?>
<!doctype html>
<html lang="en">

    <head>
        <title>Edit Profile</title>
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
                <!-- MAIN CONTENT -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="panel panel-profile">
                            <div class="clearfix">
                                <!-- LEFT COLUMN -->
                                <div class="profile-left">
                                    <div class="profile-header">
                                        <div class="overlay"></div>
                                        <div class="profile-main">
                                            <div class="img-hover">
                                                <img src='<?php echo "../avatar/" . $row['img_path']; ?>' alt='Avatar' class='img-circle' style='width: 100px; height: 100px;' onerror='this.src="../assets/img/default_avatar.png"'>
                                                <div class="middle">
                                                    <div class="text">Change Picture</div>
                                                </div>
                                            </div>
                                            <!-- Trigger change picture modal -->
                                            <button type="button" id="triggerModal" data-toggle="modal" data-target="#picModal" style="display: none;"></button>
                                            <h3 class="name"><?php echo $row['fullname']; ?></h3>
                                        </div>
                                    </div>
                                    <!-- PROFILE DETAIL -->
                                    <div class="profile-detail">
                                        <form method="POST" autocomplete="off">
                                            <div class="profile-info left-right-padding">
                                                <h4 class="heading">Personal & Account Information</h4>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Employee ID</label><span class="float-right"><?php echo $row['ID'];?></span>
                                                    <input type="text" name="id" style="visibility: hidden;" value="<?php echo $row['ID'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Full Name</label><span class="float-right"><input type="text" name="fullname" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label><span class="float-right"><input type="email" name="email" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <span class="float-right">
                                                        <!-- Trigger change password modal -->
                                                        <a href="#" id="triggerModal" data-toggle="modal" data-target="#passModal">Change Password</a>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Birthdate</label><span class="float-right"><input type="text" name="bdate" class="form-control datePicker"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <span class="float-right">
                                                        <select class="form-control" name="gender">
                                                            <option value="" disabled selected>-- Select gender --</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Civil Status</label>
                                                    <span class="float-right">
                                                        <select name="civstat" class="form-control">
                                                            <option value="" disabled selected>-- Civil Status --</option>
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Divorced">Divorced</option>
                                                            <option value="Widow/Widower">Widow/Widower</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Educational Background</label>
                                                    <span class="float-right">
                                                        <select name="education" class="form-control">
                                                            <option value="" disabled selected>-- Educational Attainment --</option>
                                                            <option value="High School Diploma">High School Diploma</option>
                                                            <option value="Vocational Diploma">Vocational Diploma</option>
                                                            <option value="College Graduate">College Graduate</option>
                                                            <option value="Post Graduate Diploma">Post Graduate Diploma</option>
                                                            <option value="Doctorate Degree">Doctorate Degree</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label><span class="float-right"><input type="text" name="address" class="form-control"></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="text-center col-sm-6">
                                                    <input type="reset" class="btn btn-danger" value="Reset">
                                                </div>
                                                <div class="text-center col-sm-6">
                                                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                                                </div>
                                            </div>
                                        </form>
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
                                            <hr>
                                            <div class="text-center">
                                                <i style="color: red;">Please contact administrator for updating this field</i>
                                            </div>
                                            <ul class="list-unstyled list-justify">
                                                <li>Branch <span><?php echo $row['branch'];?></span></li>
                                                <li>Department <span><?php echo $row['department'];?></span></li>
                                                <li>Position <span><?php echo $row['position'];?></span></li>
                                                <li>Date Hired <span><?php echo $row['date_hired'];?></span></li>
                                                <li>Status <span><?php echo $row['status'];?></span></li>
                                                <hr>
                                                <li>Salary Rate <span>&#8369; <?php echo $row['salary_rate'];?></span></li>
                                                <li>Allowance <span>&#8369; <?php echo $row['allowance'];?></span></li>
                                                <li>COLA <span>&#8369; <?php echo $row['COLA'];?></span></li>
                                                <li>Tax <span>&#8369; <?php echo $row['tax'];?></span></li>
                                                <li>SSS Premium <span>&#8369; <?php echo $row['SSS_Premium'];?></span></li>
                                                <li>SSS Loan <span>&#8369; <?php echo $row['SSS_Loan'];?></span></li>
                                                <li>MDMF Premium <span>&#8369; <?php echo $row['MDMF_Premium'];?></span></li>
                                                <li>MDMF Loan <span>&#8369; <?php echo $row['MDMF_Loan'];?></span></li>
                                                <li>MDMF Housing <span>&#8369; <?php echo $row['MDMF_Housing'];?></span></li>
                                                <li>MDMF 2 <span>&#8369; <?php echo $row['MDMF_2'];?></span></li>
                                                <li>PHIC Premium <span>&#8369; <?php echo $row['PHIC_Premium'];?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END PROFILE DETAIL -->
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
        <!-- Change picture modal -->
        <div class="modal fade" id="picModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Picture</h5>
                        </div>
                        <div class="modal-body">
                            <label for="image" class="control-label">Picture</label>
                            <input type="file" name="image" accept="image/*" required>
                            <input type="text" name="id" style="visibility: hidden;" value="<?php echo $row['ID'];?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="changePic" class="btn btn-primary" value="Update Picture">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End change picture modal -->
        <!-- Change password modal -->
        <div class="modal fade" id="passModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-dialog-centered">
                    <form method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="id" style="visibility: hidden;" value="<?php echo $row['ID'];?>">
                                <label class="control-label">Current Password</label>
                                <input type="password" name="oldPass" class="form-control pass" placeholder="Current Password" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">New Password</label>
                                <input type="password" name="password" class="form-control pass" id="password" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one uppercase and one lowercase letter, and at least 8 or more characters" required>
                            </div>
                            <div id="showPass" style="display: inline;">
                                <i class="lnr lnr-lock"></i><span>Show Password</span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="reset" class="btn btn-danger" value="Clear">
                            <input type="submit" name="changePass" class="btn btn-primary" value="Change Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End change password modal -->
        <!-- Javascript -->
        <?php include('scripts.html');?>
    </body>

</html>
