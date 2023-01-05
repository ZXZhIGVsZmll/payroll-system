<?php
include ('../includes/login-include.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
	header('location: ../index.php');
} elseif ($_SESSION['type'] == 'admin') {
	header('location: ../admin/dashboard.php');
} else {
	$email = $_SESSION['email'];
	$sql = "SELECT *  FROM `employees` WHERE `email` = '$email'";
	$result = $connect->query($sql);
	$row = $result->fetch_assoc();
}
?>
<!doctype html>
<html lang="en">

    <head>
        <title>My Payslips</title>
        <?php include('header.html');?>
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
                                <p class="panel-subtitle">Payslips</p>
                            </div>
                            <div class="panel-body">
                                <strong><?php echo $row['fullname']; ?> list of payslips</strong>
                                <table id="payslipTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Payslip ID</th>
                                            <th>Period</th>
                                            <th>Base Salary</th>
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
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT -->
            </div>
        </div>
        <!-- END WRAPPER -->
        <!-- Javascript -->
        <?php include('scripts.html');?>
        <script type="text/javascript">
        var name = "<?php echo $row['fullname']; ?>",
            id = "<?php echo $row['ID']; ?>";

        $('#payslipTable').DataTable({
            // Get data from database
            processing: true,
            serverSide: true,
            ajax: {
                url: "../includes/ajax-payslips.php",
                type: "POST",
                data: {
                    table: "emp_" + id
                }
            },
            ordering: false,
            // DOM
            dom: 'Brtip',
            // Buttons
            buttons: [{
                    extend: 'print',
                    title: name.concat("'s Payslips"),
                    className: 'btn btn-default',
                    text: '<i class="lnr lnr-printer"> Print All</i>'
                },
                {
                    extend: 'excel',
                    title: 'My Payslips',
                    className: 'btn btn-default',
                    text: '<i class="lnr lnr-download"> Excel</i>'
                }
            ],
            pageLength: 10,
            scrollX: true,
            columnDefs: [{
                targets: -1,
                data: null,
                defaultContent: "<button class='btn btn-default'><i class='lnr lnr-printer'></i> Print</button>"
            }]
        });

        $('#payslipTable tbody').on('click', 'button', function() {
            var table = $('#payslipTable').DataTable(),
                d = table.row($(this).parents('tr')).data();
            window.open("../includes/print.php?id=" + id + "&name=" + name + "&date=" + d[1] + "&bsal=" + d[7] + "&ot=" + d[9] + "&allw=" + d[10] + "&cola=" + d[11] + "&tmb=" + d[12] + "&ut=" + d[14] + "&late=" + d[16] + "&tax=" + d[17] + "&sssp=" + d[18] + "&sssl=" + d[19] + "&hdmfp=" + d[20] + "&hdmfl=" + d[21] + "&hdmfh=" + d[22] + "&hdmft=" + d[23] + "&phic=" + d[24] + "&total=" + d[25], "Print", "scrollbars=no,width=1000,height=650");
        });
        </script>
    </body>

</html>
