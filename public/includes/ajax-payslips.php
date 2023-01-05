<?php
include('conn.php');

$id= $_GET['id'];
$result = $connect->query("SELECT * FROM `payslips` WHERE `emp_id` = '$id'");
$rows = array();

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

print json_encode($rows);
