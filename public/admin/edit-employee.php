<?php
include ('../includes/login-include.php');
include ('../includes/edit-emp.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
	header('location: ../index.php');
} elseif ($_SESSION['type'] == 'employee') {
	header('location: employee-dashboard.php');
} elseif (empty($_GET['id'])) {
	header('location:employees-list.php');
} else {
	$searchid = $_GET['id'];
	$sql = "SELECT * FROM `employees` WHERE `ID` = '$searchid'";
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

<body><?php echo $error;?>
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
                                        <img src='<?php echo "../avatar/" . $row['img_path'];?>' alt='Avatar' id='img' class='img-circle' style='width: 100px; height: 100px;' onerror='this.src="../assets/img/default_avatar.png"'>
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
                                                <label>Employee ID</label>
                                                <span class="float-right"><?php echo $row['ID'];?></span>
                                                <input type="text" name="id" style="visibility: hidden;" value="<?php echo $row['ID'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <span class="float-right">
                                                    <input type="text" name="fullname" class="form-control">
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <span class="float-right">
                                                    <input type="email" name="email" class="form-control">
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <span class="float-right">
                                                    <!-- Trigger change password modal -->
                                                    <a href="#" id="triggerModal" data-toggle="modal" data-target="#passModal">Change Password</a>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label>Birthdate</label>
                                                <span class="float-right">
                                                    <input type="text" name="bdate" class="form-control datePicker">
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <span class="float-right">
                                                    <select class="form-control" name="gender">
                                                        <option value="" disabled selected>-- Change gender --</option>
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
                                                <label>Address</label>
                                                <span class="float-right">
                                                    <input type="text" name="address" class="form-control">
                                                </span>
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
                                        <ul class="list-unstyled list-justify">
                                            <form method="POST" autocomplete="off">
                                                <div class="form-group">
                                                    <label>Branch</label>
                                                    <span class="float-right">
                                                        <select name="branch" class="form-control">
                                                            <option value="" disabled selected>-- Select Branch --</option>
                                                            <option value="Gaisano Mall of Davao">Gaisano Mall of Davao</option>
                                                            <option value="Gaisano Grand Mall Ilustre">Gaisano Grand Mall Ilustre</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <span class="float-right">
                                                        <select name="department" class="form-control">
                                                            <option value="" disabled selected>-- Select Department --</option>
                                                            <option value="Accounting">Accounting</option>
                                                            <option value="Sales">Sales</option>
                                                            <option value="Executive">Executive</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Position</label><span class="float-right"><input type="text" name="position" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Hired</label><span class="float-right"><input type="text" name="date_hired" class="form-control datePicker"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <span class="float-right">
                                                        <select name="status" class="form-control">
                                                            <option value="" disabled selected>-- Select Status --</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                            <option value="Resigned">Resigned</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Admin?</label>
                                                    <span class="float-right">
                                                        <select name="admin" class="form-control">
                                                            <option value="" disabled selected>-- Admin Status --</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <input type="text" name="id" style="visibility: hidden;" value="<?php echo $row['ID'];?>">
                                                <div class="row">
                                                    <div class="text-center col-sm-6">
                                                        <input type="reset" class="btn btn-danger" value="Reset">
                                                    </div>
                                                    <div class="text-center col-sm-6">
                                                        <input type="submit" class="btn btn-primary" name="updateInfo" value="Update">
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <form method="POST" autocomplete="off">
                                                <div class="form-group">
                                                    <label>Salary Rate</label><span class="float-right"><input type="text" name="salary" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Allowance</label><span class="float-right"><input type="text" name="allowance" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>COLA</label><span class="float-right"><input type="text" name="cola" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tax</label><span class="float-right"><input type="text" name="tax" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>SSS Premium</label><span class="float-right"><input type="text" name="sss-p" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>SSS Loan</label><span class="float-right"><input type="text" name="sss-l" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>HDMF Premium</label><span class="float-right"><input type="text" name="hdmf-p" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>HDMF Loan</label><span class="float-right"><input type="text" name="hdmf-l" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>HDMF Housing</label><span class="float-right"><input type="text" name="hdmf-h" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>HDMF 2</label><span class="float-right"><input type="text" name="hdmf-2" class="form-control"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>PHIC Premium</label><span class="float-right"><input type="text" name="phic-p" class="form-control"></span>
                                                </div>
                                                <input type="text" name="id" style="visibility: hidden;" value="<?php echo $row['ID'];?>">
                                                <div class="row">
                                                    <div class="text-center col-sm-6">
                                                        <input type="reset" class="btn btn-danger" value="Reset">
                                                    </div>
                                                    <div class="text-center col-sm-6">
                                                        <input type="submit" class="btn btn-primary" name="updateInformation" value="Update">
                                                    </div>
                                                </div>
                                            </form>
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
                            <input type="text" name="id" style="display: none;" value="<?php echo $row['ID'];?>">
                        </div>
                        <div class="form-group">
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
    <?php
        include('scripts.html');
    ?>
</body>

</html>
