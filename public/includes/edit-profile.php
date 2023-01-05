<?php
$msg = "";

if (isset($_POST["update"])) {
    $stmt = $connect->prepare(
        "UPDATE `employees` SET
        `fullname` = IF(? <> '', ?, `fullname`),
        `email` = IF(? <> '', ?, `email`),
        `birthdate` = IF(? <> '', ?, `birthdate`),
        `gender` = IF(? <> '', ?, `gender`),
        `civil_status` = IF(? <> '', ?, `civil_status`),
        `educational_background` = IF(? <> '', ?, `educational_background`),
        `address` = IF(? <> '', ?, `address`)
        WHERE ID = ?"
    );
    $stmt->bind_param(
        "ssssssssssssssi",
        $_POST["fullname"],
        $_POST["fullname"],
        $_POST["email"],
        $_POST["email"],
        $_POST["bdate"],
        $_POST["bdate"],
        $_POST["gender"],
        $_POST["gender"],
        $_POST["civstat"],
        $_POST["civstat"],
        $_POST["education"],
        $_POST["education"],
        $_POST["address"],
        $_POST["address"],
        $_POST["id"]
    );
    $stmt->execute();

    if ($connect->affected_rows > 0) {
        $sql =
            "SELECT `email` FROM `employees` WHERE `ID` = '" .
            $_POST["id"] .
            "'";
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();
        $_SESSION["email"] = $row["email"];
        $_SESSION["notif"] = 'toastr.success("Click here to show profile", "Profile updated");';

        if ($_SESSION["type"] == "employee") {
            $_SESSION["url"] = "../employee/profile.php";
        } elseif ($_SESSION["type"] == "admin") {
            $_SESSION["url"] = "../admin/profile.php";
        }

    } elseif ($connect->affected_rows == 0) {
        $_SESSION["notif"] = 'toastr.info("No changes made", "Info");';
    }

// Change Password
} elseif (isset($_POST["changePass"])) {
    $sql =
        "SELECT * FROM `employees` WHERE `ID` = '" .
        $_POST["id"] .
        "' AND BINARY `password` = '" .
        $_POST["oldPass"] .
        "'";
    $result = $connect->query($sql);

    if ($result->num_rows == 1) {
        $stmt = $connect->prepare(
            "UPDATE `employees` SET `password` = ? WHERE ID = ?"
        );
        $stmt->bind_param("si", $_POST["password"], $_POST["id"]);
        $stmt->execute();

        if ($connect->affected_rows > 0) {
            $_SESSION["notif"] =
                'toastr.success("Password updated", "Success");';

        } elseif ($connect->affected_rows == 0) {
            $_SESSION["notif"] = 'toastr.info("No changes made", "Info");';
        }

    } else {
        $_SESSION["notif"] = 'toastr.error("Current password is incorrect", "Failed");';
    }

// Change Avatar
} elseif (isset($_POST["changePic"])) {
    // Select image path
    $sql =
        "SELECT `img_path` FROM `employees` WHERE `ID` = '" .
        $_POST["id"] .
        "'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    $imgname = substr($row["img_path"], 0, 32);
    $target_file = "../avatar/" . basename($_FILES["image"]["name"]);
    $imgfiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $imgfilename = "$imgname.$imgfiletype";

    if (move_uploaded_file($_FILES["image"]["tmp_name"],"../avatar/$imgfilename")
    ) {
        $stmt = $connect->prepare(
            "UPDATE `employees` SET `img_path` = ? WHERE ID = ?"
        );
        $stmt->bind_param("si", $imgfilename, $_POST["id"]);

        if ($stmt->execute()) {
            $_SESSION["img"] = $imgfilename;
            $_SESSION["notif"] =
                'toastr.success("Click here to show profile", "Profile picture updated");';

            if ($_SESSION["type"] == "employee") {
                $_SESSION["url"] = "../employee/profile.php";
            } elseif ($_SESSION["type"] == "admin") {
                $_SESSION["url"] = "../admin/profile.php";
            }
        }
    }
}
