<?php
session_start();
include('conn.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "SELECT `ID`, `email`, `password`, `admin`, `img_path` FROM `employees` WHERE `email` = '$email' AND BINARY `password` = '$password'";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $fetch = mysqli_fetch_assoc($result);
        $_SESSION['myprofile'] = $fetch['ID'];
        if ($fetch['admin'] == 'Yes') {
            $_SESSION['email'] = $email;
            $_SESSION['type'] = "admin";
            $_SESSION['img'] = $fetch['img_path'];
            header("location: admin/dashboard.php");
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['type'] = "employee";
            $_SESSION['img'] = $fetch['img_path'];
            header("location: employee/payslips.php");
        }
    } else {
        $_SESSION['message'] = "Incorrect Email or Password";
    }
}
