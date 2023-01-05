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
    <title>View Payroll</title>
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
                            <p class="panel-subtitle">List of Payroll</p>
                        </div>
                        <div class="panel-body">
                            <table id="viewPayroll" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Payroll Date</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <!--th>Complete</th-->
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
    $(document).ready(function() {
        $('#viewPayroll').DataTable({
            // Get data from database
            processing: true,
            serverSide: true,
            ajax: "../includes/ajax-view-payroll.php",
            // DOM
            //dom: 'lfrtip',
            order: [
                [2, 'desc']
            ],
            pageLength: 20,
            lengthMenu: [
                [20, 40, 60, 80, 100, -1],
                ['20', '40', '60', '80', '100', 'All']
            ],
            language: {
                // Customize length menu
                lengthMenu: "_MENU_ Show",
                //  Customize search box
                search: "_INPUT_",
                searchPlaceholder: "Search"
                //  End of new
            },
            // Clickable row
            fnDrawCallback: function() {
                $('#viewPayroll tbody tr').click(function() {
                    var table = $('#viewPayroll').dataTable(),
                        position = table.fnGetPosition(this),
                        startDate = table.fnGetData(position)[2];
                        endDate = table.fnGetData(position)[3];
                    document.location.href = 'payroll.php?start=' + startDate + '&end=' + endDate;
                })
            }
        });
    });
    </script>
</body>

</html>
