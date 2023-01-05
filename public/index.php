<?php
include('includes/login-include.php');

// Check logged in user
if (isset($_SESSION['email']) && $_SESSION['type'] == 'admin') {
    header('location: admin/dashboard.php');
} else if (isset($_SESSION['email']) && $_SESSION['type'] == 'employee') {
    header('location: employee/payslips.php');
}

?>

<!doctype html>
<html lang="en" class="fullscreen-bg">
    <head>
        <title>Payroll System | Login</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/logoipsum-261-logo.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logoipsum-261-logo.png">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <div class="vertical-align-wrap">
                <div class="vertical-align-middle">
                    <div class="auth-box">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center">
                                    <img src="assets/img/logoipsum-261-banner.png" height="75%" width="75%" alt="Company logo">
                                </div>
                                <p class="lead">Login to your account</p>
                            </div>
                            <p style="color: red; text-align: center;">
                                <?php
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                                ?>
                            </p>
                            <form class="form-auth-small" method="POST">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" name="email" class="form-control" id="signin-email" placeholder="Email" style="margin: auto; width: 75%;" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" name="pass" class="form-control" id="signin-password" placeholder="Password" style="margin: auto; width: 75%;"required>
                                </div>
                                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" style="margin: auto; width: 50%;">Login</button>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<script>
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>
