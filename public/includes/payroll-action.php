<?php
$msg = "";

// Create payroll entry
if (isset($_POST["new-payroll"])) {
    // Get value from date range picker
    $date = $_POST["pdate"]; // payroll.date_range in database
    // Split start and end date
    $start = preg_filter('/^(.+)\s-\s.+$/', '$1', $date);
    $end = preg_filter('/^.+\s-\s(.+)$/', '$1', $date);
    // Convert to ISO format and remove time
    $date_start = substr(date('c', strtotime($start)), 0, 10); // payroll.date_start in database
    $date_end = substr(date('c', strtotime($end)), 0, 10); // payroll.date_end in database

    // Check for duplicates
    $find_duplicate = "SELECT `date_start`, `date_end` FROM `payroll` WHERE `date_start` = '$date_start' OR `date_end` = '$date_end'";
    $result = $connect->query($find_duplicate);

    if ($result->num_rows == 1) {
        $_SESSION["notif"] = 'toastr.error("Payroll already exist", "Failed to create new payroll");';

    } else {
        // Create payroll entry
        $add = "INSERT INTO `payroll`(`id`, `date_range`, `date_start`, `date_end`, `complete`) VALUES (NULL, '$date', '$date_start', '$date_end', 0)";

        if ($connect->query($add) === true) {
            $_SESSION["notif"] = 'toastr.success("Click here to view", "Payroll created");';
            // TODO
            // Give URL to Click here to view
        } else {
            $_SESSION["notif"] = 'toastr.error("Something went wrong", "Failed to create new payroll");';
        }
    }
}

// Create payslip entry
if (isset($_POST["new-payslip"])) {
    // Get value from date range picker
    $date = $_POST["pdate"]; // payroll.date_range in database
    // Split start and end date
    $start = preg_filter('/^(.+)\s-\s.+$/', '$1', $date);
    $end = preg_filter('/^.+\s-\s(.+)$/', '$1', $date);
    // Convert to ISO format and remove time
    $date_start = substr(date('c', strtotime($start)), 0, 10); // payroll.date_start in database
    $date_end = substr(date('c', strtotime($end)), 0, 10); // payroll.date_end in database

    $add = "INSERT INTO `payslips`(`id`, `emp_id`, `date_start`, `date_end`, `b_sal`, `bi_sal`, `d_sal`, `dp`, `dpsh`, `dprh`, `b_total`, `oth`, `otv`, `allowance`, `cola`, `tmb`, `uth`, `utv`, `late_m`, `late_v`, `tax`, `sss_p`, `sss_l`, `mdmf_p`, `mdmf_l`, `mdmf_h`, `mdmf_t`, `phic`, `total`) VALUES (NULL, '".$_POST['empID']."', $date_start, $date_end, '".$_POST['bsalary']."', '".$_POST['bmsalary']."', '".$_POST['salary']."', '".$_POST['dp-reg']."', '".$_POST['dp-sh']."', '".$_POST['dp-rh']."', '".$_POST['b-total']."', '".$_POST['ot-h']."', '".$_POST['ot-val']."', '".$_POST['allowance']."', '".$_POST['cola']."', '".$_POST['bonus']."', '".$_POST['ut-h']."', '".$_POST['ut-val']."', '".$_POST['late-m']."', '".$_POST['late-v']."', '".$_POST['tax']."', '".$_POST['sss-p']."', '".$_POST['sss-l']."', '".$_POST['mdmf-p']."', '".$_POST['mdmf-l']."', '".$_POST['mdmf-h']."', '".$_POST['mdmf-2']."', '".$_POST['phic']."', '".$_POST['total']."')";

    if ($connect->query($add) === true) {
        $_SESSION["notif"] = 'toastr.success("Click here to view", "Payslip created");';
        // TODO
        // Give URL to Click here to view
    } else {
        $_SESSION["notif"] = 'toastr.error("Something went wrong", "Failed to create new payslip");';
    }
}
