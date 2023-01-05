<?php
include ('login-include.php');
// Check logged in user and type
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} else {
    $searchid = $_GET['id'];
    $sql = "SELECT * FROM `employees` WHERE `id` = '$searchid'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    $inc = $_GET['bsal']+$_GET['allw']+$_GET['cola']+$_GET['ot']+$_GET['tmb'];
    $income = number_format($inc, 2, '.', ',');
    $deduc = $_GET['ut']+$_GET['late']+$_GET['tax']+$_GET['sssp']+$_GET['sssl']+$_GET['hdmfp']+$_GET['hdmfl']+$_GET['hdmfh']+$_GET['hdmft']+$_GET['phic'];
    $deduction = number_format($deduc, 2, '.', ',');

    // Date Range
    $monthStart = date('F', strtotime($_GET['dateStart']));
    $dayStart = date('d', strtotime($_GET['dateStart']));
    $yearStart = date('Y', strtotime($_GET['dateStart']));
    $dateStart = $monthStart . ' ' . $dayStart . ', ' . $yearStart;
    $monthEnd = date('F', strtotime($_GET['dateEnd']));
    $dayEnd = date('d', strtotime($_GET['dateEnd']));
    $yearEnd = date('Y', strtotime($_GET['dateEnd']));
    $dateEnd = $monthEnd . ' ' . $dayEnd . ', ' . $yearEnd;
    $dateRange = $dateStart . ' to ' . $dateEnd;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Print</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/logoipsum-261-logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logoipsum-261-logo.png">

    <style type="text/css" media="print">
    /* Hide header and footer */
    @page
    {
        size:  auto;
        margin: 0mm;
    }
    </style>

</head>

<body>
    <div id="wrapper" style="width: 800px; height: 600px; margin: auto;">
        <!-- Print -->
        <div class="print-border">
            <!-- Header -->
            <div class="top">
                <!-- Left -->
                <div class="profile-left align-left col-sm-6" style="line-height: 1.5; padding-top: 10px;">
                    <div class="right-padding">
                        <ul class="list-unstyled list-justify" style="list-style: none;padding: 0;">
                            <li>Name: <span><?php echo $_GET['name'];?></span></li>
                            <li>Period: <span><?php echo $dateRange;?></span></li>
                            <li>Branch: <span><?php echo $row['branch'];?></span></li>
                            <li>Position: <span><?php echo $row['position'];?></span></li>
                        </ul>
                    </div>
                </div>
                <!-- Right -->
                <div class="profile-right align-right col-sm-6">
                    <h2>Lorem Ipsum International Incorporated</h2>
                    <p>Helsinki, Finland<p>
                    <br>
                    <span class="lnr lnr-phone"></span> (001) 222-5555, <span class="lnr lnr-phone-handset"></span> +63912 345 6789
                </div>
            </div>
            <!-- Header -->
            <hr>
            <!-- Body -->
            <div class="body">
                <!-- Left -->
                <div class="profile-left col-sm-6">
                    <p>Income</p>
                    <div class="right-padding text-sm-1">
                        <ul class="list-unstyled list-justify" style="list-style: none;">
                            <li>Basic Pay <span><?php echo number_format($_GET['bsal'], 2, '.', ',');?></span></li>
                            <li>Allowance <span><?php echo number_format($_GET['allw'], 2, '.', ',');?></span></li>
                            <li>C.O.L.A. <span><?php echo number_format($_GET['cola'], 2, '.', ',');?></span></li>
                            <li>Overtime <span><?php echo number_format($_GET['ot'], 2, '.', ',');?></span></li>
                            <li>Bonus <span><?php echo number_format($_GET['tmb'], 2, '.', ',');?></span></li>
                        </ul>
                    </div>
                    <p>Deductions</p>
                    <div class="right-padding text-sm-1">
                        <ul class="list-unstyled list-justify" style="list-style: none;">
                            <li>Undertime <span><?php echo number_format($_GET['ut'], 2, '.', ',');?></span></li>
                            <li>Late <span><?php echo number_format($_GET['late'], 2, '.', ',');?></span></li>
                            <li>Tax <span><?php echo number_format($_GET['tax'], 2, '.', ',');?></span></li>
                        </ul>
                    </div>
                    <p>Notes</p>
                    <div></div>
                </div>
                <!-- Right -->
                <div class="profile-right col-sm-6">
                    <p>Deductions</p>
                    <div class="right-padding text-sm-1">
                        <ul class="list-unstyled list-justify" style="list-style: none;">
                            <li>SSS Premium <span><?php echo number_format($_GET['sssp'], 2, '.', ',');?></span></li>
                            <li>SSS Loan <span><?php echo number_format($_GET['sssl'], 2, '.', ',');?></span></li>
                            <li>HDMF Premium <span><?php echo number_format($_GET['hdmfp'], 2, '.', ',');?></span></li>
                            <li>HDMF Loan <span><?php echo number_format($_GET['hdmfl'], 2, '.', ',');?></span></li>
                            <li>HDMF Housing <span><?php echo number_format($_GET['hdmfh'], 2, '.', ',');?></span></li>
                            <li>HDMF 2 <span><?php echo number_format($_GET['hdmft'], 2, '.', ',');?></span></li>
                            <li>PHIC <span><?php echo number_format($_GET['phic'], 2, '.', ',');?></span></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="right-padding">
                        <ul class="list-unstyled list-justify" style="list-style: none;">
                            <li>Total Income <span><?php echo $income;?></span></li>
                            <li>Total Deductions <span><?php echo $deduction;?></span></li>
                            <br>
                            <li>Net Pay <span><?php echo number_format($_GET['total'], 2, '.', ',');?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Body -->
            <hr>
            <!-- Footer -->
            <div class="footer">
                <!-- Left -->
                <div class="profile-left align-left col-sm-6">
                    <div class="underline text-c">Payroll Officer</div>
                </div>
                <!-- Right -->
                <div class="profile-right align-right col-sm-6">
                    <div class="underline text-c">Employee's signature</div>
                </div>
            </div>
            <!-- Footer -->
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            window.print();
            setTimeout(window.close, 0);
        }
    </script>
</body>

</html>
