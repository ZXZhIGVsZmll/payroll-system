<?php
include ('../includes/login-include.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
    header('location: ../index.php');
} elseif ($_SESSION['type'] == 'employee') {
    header('location: employee-dashboard.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>List of Employees</title>
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
                            <h3 class="panel-title">Lorem Ipsum International Incorporated Employees</h3>
                            <p class="panel-subtitle">Employee Payslips</p>
                        </div>
                        <div class="panel-body">
                            <table id="employeePayslip" class="table table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Branch</th>
                                        <th>Gender</th>
                                        <th>Civil Status</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <!--tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Branch</th>
                                        <th>Gender</th>
                                        <th>Civil Status</th>
                                        <th>Status</th>
                                    </tr-->
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <?php
        include('scripts.html');
    ?>
    <script>
    $(document).ready(function() {
        $('#employeePayslip').DataTable({
            // Get data from database
            processing: true,
            serverSide: true,
            ajax: "../includes/ajax-employees.php",
            // DOM
            dom: 'lBfrtip',
            // Buttons
            buttons: [
                /*
                {
                    extend: 'colvis',
                    collectionLayout: 'fixed columns',
                    collectionTitle: 'Change column visibility'
                },
                */
                {
                extend: 'print',
                title: 'Lorem Ipsum Incorporated Employees',
                className: 'btn btn-default',
                text: '<i class="lnr lnr-printer"> Print</i>'
                }
            ],
            pageLength: 20,
            lengthMenu: [
                [20, 40, 60, 80, 100, -1],
                ['20', '40', '60', '80', '100', 'All']
            ],
            language: {
                lengthMenu: "_MENU_ Show",
                search: "_INPUT_",
                searchPlaceholder: "Search"
            },
            // Clickable row
            fnDrawCallback: function() {
                $('#employeePayslip tbody tr').click(function() {
                    var table = $('#employeePayslip').dataTable(),
                        position = table.fnGetPosition(this),
                        id = table.fnGetData(position)[0];
                    document.location.href = 'employee-payslip.php?id=' + id;
                })
            }
        });
    });
    </script>
</body>

</html>
