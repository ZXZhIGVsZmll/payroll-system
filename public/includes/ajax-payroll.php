<?php
include('conn.php');

$start = $_GET['start'];
$end = $_GET['end'];
/* $result = $connect->query("SELECT * FROM `payslips` WHERE `date_start` = '$start' AND `date_end` = '$end'"); */
$result = $connect->query("
    SELECT
        `payslips`.`id`,
        `payslips`.`date_start`,
        `payslips`.`date_end`,
        `payslips`.`emp_id`,
        `employees`.`fullname`,
        `payslips`.`b_sal`,
        `payslips`.`bi_sal`,
        `payslips`.`d_sal`,
        `payslips`.`dp`,
        `payslips`.`dpsh`,
        `payslips`.`dprh`,
        `payslips`.`b_total`,
        `payslips`.`oth`,
        `payslips`.`otv`,
        `payslips`.`allowance`,
        `payslips`.`cola`,
        `payslips`.`tmb`,
        `payslips`.`uth`,
        `payslips`.`utv`,
        `payslips`.`late_m`,
        `payslips`.`late_v`,
        `payslips`.`tax`,
        `payslips`.`sss_p`,
        `payslips`.`sss_l`,
        `payslips`.`mdmf_p`,
        `payslips`.`mdmf_l`,
        `payslips`.`mdmf_h`,
        `payslips`.`mdmf_t`,
        `payslips`.`phic`,
        `payslips`.`total`
    FROM
        `payslips`
    INNER JOIN
        `employees` ON `payslips`.`emp_id` = `employees`.`ID`
    WHERE `date_start` = '$start' AND `date_end` = '$end'
");
$rows = array();

while($r = mysqli_fetch_assoc($result)) {
    /* Convert date format from yyyy-mm-dd to M dd, yyyy */
    foreach ($r as $value) {
        if ($value == $r['date_start']) {
            $month = date('F', strtotime($r['date_start']));
            $day = date('d', strtotime($r['date_start']));
            $year = date('Y', strtotime($r['date_start']));
            $date = $month . ' ' . $day . ', ' . $year;
            $r['date_start'] = $date;

        } elseif ($value == $r['date_end']) {
            $month = date('F', strtotime($r['date_end']));
            $day = date('d', strtotime($r['date_end']));
            $year = date('Y', strtotime($r['date_end']));
            $date = $month . ' ' . $day . ', ' . $year;
            $r['date_end'] = $date;
        }
    }

    $rows[] = $r;
}

print json_encode($rows);
