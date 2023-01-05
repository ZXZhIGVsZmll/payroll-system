<?php
include ('../includes/login-include.php');
include ('../includes/employee-action.php');

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
    <title>Add New Employee</title>
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
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lorem Ipsum International Incorporated Employees</h3>
                            <p class="panel-subtitle">Add Employee</p>
                            <span class="label label-info">Info: Employee ID is automatically generated</span>
                        </div>
                        <form method="POST" enctype="multipart/form-data" autocomplete="off">
                            <div class="panel-body">
                                <div class="row">
                                    <!-- Left panel -->
                                    <div class="col-sm-6 left-right-padding">
                                        <div class="form-group">
                                            <label for="fullname" class="control-label">Full Name</label>
                                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="control-label">Password</label>
                                            <input type="password" name="password" class="form-control pass" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one uppercase and one lowercase letter, and at least 8 or more characters" required>
                                            <div id="showPass" style="display: inline;">
                                                <i class="lnr lnr-lock"></i><span>Show Password</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Gender</label><br>
                                            <label class="fancy-radio custom-color-blue" style="width: 100px">
                                                <input name="gender" value="Male" type="radio" required><span><i></i>Male</span>
                                            </label>
                                            <label class="fancy-radio custom-color-pink" style="width: 100px">
                                                <input name="gender" value="Female" type="radio"><span><i></i>Female</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="education" class="control-label">Educational Background</label><br>
                                            <select id="education" name="education" class="form-control" required>
                                                <option value="" disabled selected>-- Educational Attainment --</option>
                                                <option value="High School Diploma">High School Diploma</option>
                                                <option value="Vocational Diploma">Vocational Diploma</option>
                                                <option value="College Graduate">College Graduate</option>
                                                <option value="Post Graduate Diploma">Post Graduate Diploma</option>
                                                <option value="Doctorate Degree">Doctorate Degree</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="control-label">Picture</label>
                                            <input type="file" name="image" id="image" required>
                                        </div>
                                    </div>
                                    <!-- End Left panel -->
                                    <!-- Right panel -->
                                    <div class="col-sm-6 left-right-padding">
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email</label><i style="color: red;"><?php echo " $exist"; ?></i>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthdate" class="control-label">Birthdate</label><br>
                                            <input type="text" name="birthdate" id="birthdate" class="form-control numericInput datePicker" placeholder="MMMM/DD/YYYY" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="civil_status" class="control-label">Civil Status</label><br>
                                            <select id="civil_status" name="civil_status" class="form-control" required>
                                                <option value="" disabled selected>-- Civil Status --</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Widow/Widower">Widow/Widower</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="control-label">Address</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
                                        </div>
                                    </div>
                                    <!-- End Right panel -->
                                </div>
                                <hr>
                                <div class="row">
                                    <!-- Left panel -->
                                    <div class="col-sm-6 left-right-padding">
                                        <div class="form-group">
                                            <label for="branch" class="control-label">Branch</label><br>
                                            <select id="branch" name="branch" class="form-control" required>
                                                <option value="" disabled selected>-- Select Branch --</option>
                                                <option value="Gaisano Mall of Davao">Gaisano Mall of Davao</option>
                                                <option value="Gaisano Grand Mall Ilustre">Gaisano Grand Mall Ilustre</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="position" class="control-label">Position</label>
                                            <input type="text" name="position" id="position" class="form-control" placeholder="Position" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Admin?</label><br>
                                            <label class="fancy-radio custom-color-primary" style="width: 100px">
                                                <input name="is_admin" value="Yes" type="radio" required><span><i></i>Yes</span>
                                            </label>
                                            <label class="fancy-radio custom-color-danger" style="width: 100px">
                                                <input name="is_admin" value="No" type="radio"><span><i></i>No</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End Left panel -->
                                    <!-- Right panel -->
                                    <div class="col-sm-6 left-right-padding">
                                        <div class="form-group">
                                            <label for="department" class="control-label">Department</label><br>
                                            <select id="department" name="department" class="form-control" required>
                                                <option value="" disabled selected>-- Select Department --</option>
                                                <option value="Accounting">Accounting</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Executive">Executive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_hired" class="control-label">Date Hired</label><br>
                                            <input type="text" name="date_hired" id="date_hired" class="form-control numericInput datePicker" placeholder="MMMM/DD/YYYY" required>
                                        </div>
                                    </div>
                                    <!-- End Right panel -->
                                </div>
                                <hr>
                                <div class="row">
                                    <!-- Left panel -->
                                    <div class="col-sm-6 left-right-padding">
                                        <div class="form-group">
                                            <label for="salary" class="control-label">Salary Rate</label>
                                            <input type="text" name="salary" id="salary" class="form-control numericInput" placeholder="Salary Rate" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="cola" class="control-label">Cost of Living Allowance</label>
                                            <input type="text" name="cola" id="cola" class="form-control numericInput" placeholder="COLA" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="sss-p" class="control-label">SSS Premium</label>
                                            <input type="text" name="sss-p" id="sss-p" class="form-control numericInput" placeholder="SSS Premium" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mdmf-p" class="control-label">HDMF Premium</label>
                                            <input type="text" name="mdmf-p" id="mdmf-p" class="form-control numericInput" placeholder="HDMF Premium" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mdmf-h" class="control-label">HDMF Housing</label>
                                            <input type="text" name="mdmf-h" id="mdmf-h" class="form-control numericInput" placeholder="HDMF Housing" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phic-p" class="control-label">PHIC Premium</label>
                                            <input type="text" name="phic-p" id="phic-p" class="form-control numericInput" placeholder="PHIC Premium" required>
                                        </div>
                                    </div>
                                    <!-- End Left panel -->
                                    <!-- Right panel -->
                                    <div class="col-sm-6 left-right-padding">
                                        <div class="form-group">
                                            <label for="allowance" class="control-label">Allowance</label>
                                            <input type="text" name="allowance" id="allowance" class="form-control numericInput" placeholder="Allowance" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tax" class="control-label">Tax</label>
                                            <input type="text" name="tax" id="tax" class="form-control numericInput" placeholder="Tax" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="sss-l" class="control-label">SSS Loan</label>
                                            <input type="text" name="sss-l" id="sss-l" class="form-control numericInput" placeholder="SSS Loan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mdmf-l" class="control-label">HDMF Loan</label>
                                            <input type="text" name="mdmf-l" id="mdmf-l" class="form-control numericInput" placeholder="HDMF Loan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mdmf-2" class="control-label">HDMF 2</label>
                                            <input type="text" name="mdmf-2" id="mdmf-2" class="form-control numericInput" placeholder="HDMF 2" required>
                                        </div>
                                    </div>
                                    <!-- End Right panel -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-right">
                                        <input type="reset" class="btn btn-danger">
                                    </div>
                                    <div class="col-sm-6 text-left">
                                        <input type="submit" name="add" value="Add Employee" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
