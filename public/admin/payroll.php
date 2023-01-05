<?php
include ('../includes/login-include.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
    header('location: ../index.php');

} elseif ($_SESSION['type'] == 'employee') {
    header('location: employee-dashboard.php');

} else {
    if (empty($_GET['start']) || empty($_GET['end'])) {
        header('location: view-payroll.php');

    } else {
        $search = array($_GET['start'], $_GET['end']);
        $sql = "SELECT * FROM `payroll` WHERE `date_start` = '$search[0]' AND `date_end` = '$search[1]'";
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();

        if ($result->num_rows == 0) {
            header('location: view-payroll.php');
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Payroll</title>
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
                            <h3 class="panel-title">Lorem Ipsum Payroll System</h3>
                            <p class="panel-subtitle">Payroll</p>
                        </div>
                        <div class="panel-body">
                            <strong>Period of <?php echo $row['date_range']; ?></strong>
                            <table id="payroll" class="table table-striped" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Payslip ID</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Base Salary</th>
                                        <th>Bimonthly</th>
                                        <th>Daily</th>
                                        <th>Days Present</th>
                                        <th>Special Holiday (Hours)</th>
                                        <th>Regular Holiday (Hours)</th>
                                        <th>Base Total</th>
                                        <th>OT (hours)</th>
                                        <th>OT value</th>
                                        <th>Allowance</th>
                                        <th>COLA</th>
                                        <th>13th month bonus</th>
                                        <th>UT (hours)</th>
                                        <th>UT value</th>
                                        <th>Late (minutes)</th>
                                        <th>Late value</th>
                                        <th>Tax</th>
                                        <th>SSS Premium</th>
                                        <th>SSS Loan</th>
                                        <th>HDMF Premium</th>
                                        <th>HDMF Loan</th>
                                        <th>HDMF Housing</th>
                                        <th>HDMF 2</th>
                                        <th>PHIC</th>
                                        <th>Net Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <!-- Code here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN -->
        <!-- End Footer -->
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <?php
    include('scripts.html');
    ?>
    <script type="text/javascript">
        var date = "<?php echo $row['date_range']; ?>";
        var startDate = "<?php echo $_GET['start']; ?>";
        var endDate = "<?php echo $_GET['end']; ?>";
        $(document).ready(function() {
            $('#payroll').DataTable( {
                // Get data from database
                ajax: {
                    url: "../includes/ajax-payroll.php?start=" + startDate + "&end=" + endDate,
                    dataSrc: '',
                },
                columns: [
                    { data: 'id'},
                    { data: 'date_start'},
                    { data: 'date_end'},
                    { data: 'emp_id'},
                    { data: 'fullname'},
                    { data: 'b_sal'},
                    { data: 'bi_sal'},
                    { data: 'd_sal'},
                    { data: 'dp'},
                    { data: 'dpsh'},
                    { data: 'dprh'},
                    { data: 'b_total'},
                    { data: 'oth'},
                    { data: 'otv'},
                    { data: 'allowance'},
                    { data: 'cola'},
                    { data: 'tmb'},
                    { data: 'uth'},
                    { data: 'utv'},
                    { data: 'late_m'},
                    { data: 'late_v'},
                    { data: 'tax'},
                    { data: 'sss_p'},
                    { data: 'sss_l'},
                    { data: 'mdmf_p'},
                    { data: 'mdmf_l'},
                    { data: 'mdmf_h'},
                    { data: 'mdmf_t'},
                    { data: 'phic'},
                    { data: 'total'},
                    { data: ''},
                ],
                ordering: false,
                // DOM
                dom: 'Brtip',
                // Buttons
                buttons: [
                    {
                        extend: 'colvis',
                        collectionLayout: 'fixed columns',
                        collectionTitle: 'Change column visibility'
                    },
                    {
                        extend: 'print',
                        title: date.concat(" Payroll"),
                        className: 'btn btn-default',
                        text: '<i class="lnr lnr-printer"> Print</i>'
                    },
                    {
                        extend: 'excel',
                        title: 'Payroll',
                        className: 'btn btn-default',
                        text: '<i class="lnr lnr-download"> Excel</i>'
                    }
                ],
                columnDefs: [
                    {
                        targets: -1,
                        data: null,
                        defaultContent: "<button class='btn btn-default'><i class='lnr lnr-printer'></i> Print</button>"
                    }
                ],
                pageLength: 10,
                scrollX: true
            });
            $('#payroll tbody').on( 'click', 'button', function () {
                var table = $('#payroll').DataTable(),
                    d = table.row( $(this) ).cells().data();
                window.open("../includes/print.php?id="+d[3]+"&name="+d[4]+"&dateStart="+d[1]+"&dateEnd="+d[2]+"&bsal="+d[5]+"&ot="+d[12]+"&allw="+d[14]+"&cola="+d[15]+"&tmb="+d[16]+"&ut="+d[18]+"&late="+d[20]+"&tax="+d[21]+"&sssp="+d[22]+"&sssl="+d[23]+"&hdmfp="+d[24]+"&hdmfl="+d[25]+"&hdmfh="+d[26]+"&hdmft="+d[27]+"&phic="+d[28]+"&total="+d[29],"Print","scrollbars=no,width=1000,height=650");
            });

        });
    </script>
</body>

</html>
