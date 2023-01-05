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
        $_SESSION["notif"] =
            'toastr.success("Click here to show profile", "Profile updated");';

        header(
            "location: employee-profile.php?employee-id=" . $_POST["id"] . ""
        );

    } elseif ($connect->affected_rows == 0) {
        $_SESSION["notif"] = 'toastr.info("No changes made", "Info");';
    }

// Change Password
} elseif (isset($_POST["changePass"])) {
    $sql =
        "SELECT * FROM `employees`
        WHERE `ID` = '" . $_POST["id"] . "' AND
        BINARY `password` = '" . $_POST["oldPass"] . "'";
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
            header(
                "location: employee-profile.php?employee-id=" .
                    $_POST["id"] .
                    ""
            );

        } elseif ($connect->affected_rows == 0) {
            $_SESSION["notif"] = 'toastr.info("No changes made", "Info");';
        }

    } else {
        $_SESSION["notif"] =
            'toastr.error("Current password is incorrect", "Failed");';
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
    $target_file = "avatar/" . basename($_FILES["image"]["name"]);
    $imgfiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $imgfilename = "$imgname.$imgfiletype";

    if (move_uploaded_file($_FILES["image"]["tmp_name"], "avatar/$imgfilename")) {
        $stmt = $connect->prepare(
            "UPDATE `employees` SET `img_path` = ? WHERE ID = ?"
        );
        $stmt->bind_param("si", $imgfilename, $_POST["id"]);

        if ($stmt->execute()) {
            $_SESSION["notif"] =
                'toastr.success("Click here to show profile", "Profile picture updated");';

            header(
                "location: employee-profile.php?employee-id=" .
                    $_POST["id"] .
                    ""
            );
        }
    }

} elseif (isset($_POST["updateInfo"])) {
    $stmt = $connect->prepare(
        "UPDATE `employees` SET
        `branch` = IF(? <> '', ?, `branch`),
        `department` = IF(? <> '', ?, `department`),
        `position` = IF(? <> '', ?, `position`),
        `date_hired` = IF(? <> '', ?, `date_hired`),
        `status` = IF(? <> '', ?, `status`),
        `admin` = IF(? <> '', ?, `admin`)
        WHERE ID = ?"
    );
    $stmt->bind_param(
        "ssssssssssssi",
        $_POST["branch"],
        $_POST["branch"],
        $_POST["department"],
        $_POST["department"],
        $_POST["position"],
        $_POST["position"],
        $_POST["date_hired"],
        $_POST["date_hired"],
        $_POST["status"],
        $_POST["status"],
        $_POST["admin"],
        $_POST["admin"],
        $_POST["id"]
    );
    $stmt->execute();

    if ($connect->affected_rows > 0) {
        $_SESSION["notif"] =
            'toastr.success("Click here to show profile", "Profile updated");';

        header(
            "location: employee-profile.php?employee-id=" . $_POST["id"] . ""
        );

    } else {
        $_SESSION["notif"] = 'toastr.info("No changes made", "Info");';

        header(
            "location: employee-profile.php?employee-id=" . $_POST["id"] . ""
        );
    }

} elseif (isset($_POST["updateInformation"])) {
    $stmt = $connect->prepare(
        "UPDATE `employees` SET
        `salary_rate` = IF(? <> '', ?, `salary_rate`),
        `allowance` = IF(? <> '', ?, `allowance`),
        `COLA` = IF(? <> '', ?, `COLA`),
        `tax` = IF(? <> '', ?, `tax`),
        `SSS_Premium` = IF(? <> '', ?, `SSS_Premium`),
        `SSS_Loan` = IF(? <> '', ?, `SSS_Loan`),
        `MDMF_Premium` = IF(? <> '', ?, `MDMF_Premium`),
        `MDMF_Loan` = IF(? <> '', ?, `MDMF_Loan`),
        `MDMF_Housing` = IF(? <> '', ?, `MDMF_Housing`),
        `MDMF_2` = IF(? <> '', ?, `MDMF_2`),
        `PHIC_Premium` = IF(? <> '', ?, `PHIC_Premium`)
        WHERE ID = ?"
    );
    $stmt->bind_param(
        "ddddddddddddddddddddddi",
        $_POST["salary"],
        $_POST["salary"],
        $_POST["allowance"],
        $_POST["allowance"],
        $_POST["cola"],
        $_POST["cola"],
        $_POST["tax"],
        $_POST["tax"],
        $_POST["sss-p"],
        $_POST["sss-p"],
        $_POST["sss-l"],
        $_POST["sss-l"],
        $_POST["hdmf-p"],
        $_POST["hdmf-p"],
        $_POST["hdmf-l"],
        $_POST["hdmf-l"],
        $_POST["hdmf-h"],
        $_POST["hdmf-h"],
        $_POST["hdmf-2"],
        $_POST["hdmf-2"],
        $_POST["phic-p"],
        $_POST["phic-p"],
        $_POST["id"]
    );
    $stmt->execute();

    if ($connect->affected_rows > 0) {
        $_SESSION["notif"] =
            'toastr.success("Click here to show profile", "Profile updated");';

        header(
            "location: employee-profile.php?employee-id=" . $_POST["id"] . ""
        );
    } else {
        $_SESSION["notif"] = 'toastr.info("No changes made", "Info");';

        header(
            "location: employee-profile.php?employee-id=" . $_POST["id"] . ""
        );
    }
}
