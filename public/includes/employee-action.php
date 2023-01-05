<?php
$exist = "";
$imgerr = "";
$msg = "";
if (isset($_POST["add"])) {
    // Image upload and add script
    $target_file =  "../avatar/" . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imgfiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $email = $_POST["email"];
    $imgid = md5($email);
    $imgname = $imgid . "." . $imgfiletype;

    // Check if image file is a actual image or fake image
    if (isset($_POST["add"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
            $imgerr = "Not an image";
        }
    }
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    if ($_FILES["image"]["size"] > 5000000) {
        $uploadOk = 0;
        $imgerr = "Maximum upload of 5 MB";
    }
    if (
        $imgfiletype != "jpg" &&
        $imgfiletype != "jpeg" &&
        $imgfiletype != "png"
    ) {
        $uploadOk = 0;
        $imgerr = "JPG and PNG are only allowed";
    }
    if ($uploadOk == 0) {
        $imgerr = "There is a problem uploading your image";
    } else {
        $chkmail = "SELECT `email` FROM `employees` WHERE `email` = '$email'";
        $result = $connect->query($chkmail);
        if ($result->num_rows == 1) {
            $exist = "already exist";
        } else {
            $add =
                "INSERT INTO `employees`(`ID`, `fullname`, `email`, `password`,
                `birthdate`, `gender`, `civil_status`, `educational_background`,
                `address`, `branch`, `department`, `position`, `date_hired`,
                `status`, `admin`, `salary_rate`, `allowance`, `COLA`, `tax`,
                `SSS_Premium`, `SSS_Loan`, `MDMF_Premium`, `MDMF_Loan`,
                `MDMF_Housing`, `MDMF_2`, `PHIC_Premium`, `img_path`)
                VALUES (NULL,
                '" . $_POST["fullname"] . "',
                '" . $_POST["email"] . "',
                '" . $_POST["password"] . "',
                '" . $_POST["birthdate"] . "',
                '" . $_POST["gender"] . "',
                '" . $_POST["civil_status"] . "',
                '" . $_POST["education"] . "',
                '" . $_POST["address"] . "',
                '" . $_POST["branch"] . "',
                '" . $_POST["department"] . "',
                '" . $_POST["position"] . "',
                '" . $_POST["date_hired"] . "',
                'Active',
                '" . $_POST["is_admin"] . "',
                '" . $_POST["salary"] . "',
                '" . $_POST["allowance"] . "',
                '" . $_POST["cola"] . "',
                '" . $_POST["tax"] . "',
                '" . $_POST["sss-p"] . "',
                '" . $_POST["sss-l"] . "',
                '" . $_POST["mdmf-p"] . "',
                '" . $_POST["mdmf-l"] . "',
                '" . $_POST["mdmf-h"] . "',
                '" . $_POST["mdmf-2"] . "',
                '" . $_POST["phic-p"] . "',
                '" . $imgname . "'
                )";
            if ($connect->query($add) === true && move_uploaded_file($_FILES["image"]["tmp_name"], "../avatar/$imgname")) {
                $empid = $connect->insert_id;
                $emptbl = "emp_$empid";
                // REMOVE ME!
                // Create employee table
                /*$newtbl = "CREATE TABLE `payrolldb`.`$emptbl` ( `empslip_ID` INT(15) UNSIGNED NOT NULL AUTO_INCREMENT, `pdate` VARCHAR(63) NOT NULL, `b_sal` DECIMAL(27,2) NOT NULL, `d_sal` DECIMAL(27,2) NOT NULL, `dp` DOUBLE NOT NULL, `dpsh` DOUBLE NOT NULL, `dprh` DOUBLE NOT NULL, `b_total` DECIMAL(27,2) NOT NULL, `oth` DOUBLE NOT NULL, `otv` DECIMAL(27,2) NOT NULL, `allowance` DECIMAL(27,2) NOT NULL, `cola` DECIMAL(27,2) NOT NULL, `tmb` DECIMAL(27,2) NOT NULL, `uth` DOUBLE NOT NULL, `utv` DECIMAL(27,2) NOT NULL, `late_m` DOUBLE NOT NULL, `late_v` DECIMAL(27,2) NOT NULL, `tax` DECIMAL(27,2) NOT NULL, `sss_p` DECIMAL(27,2) NOT NULL, `sss_l` DECIMAL(27,2) NOT NULL, `mdmf_p` DECIMAL(27,2) NOT NULL, `mdmf_l` DECIMAL(27,2) NOT NULL, `mdmf_h` DECIMAL(27,2) NOT NULL, `mdmf_t` DECIMAL(27,2) NOT NULL, `phic` DECIMAL(27,2) NOT NULL, `total` DECIMAL(27,2) NOT NULL, PRIMARY KEY (`empslip_ID`)) ENGINE = InnoDB;";
                if ($connect->query($newtbl) === true) {
                    header("location: employee-profile.php?employee-id=$empid");
                } else {
                    $msg =
                        "A problem has occured when creating employee. Please contact the developer";
                }*/
            } else {
                $imgerr =
                    "A problem has occured when creating employee. Please contact the developer";
            }
        }
    }
}
