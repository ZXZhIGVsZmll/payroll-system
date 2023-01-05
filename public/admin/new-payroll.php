<?php
include ('../includes/login-include.php');
include ('../includes/payroll-action.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
    header('location: ../index.php');
} elseif ($_SESSION['type'] == 'employee') {
    header('location: employee-dashboard.php');
}

$year = date('Y');

?>

<!doctype html>
<html lang="en">

    <head>
        <title>Create New Payroll</title>
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
                            <h3 class="panel-title">Lorem Ipsum International Incorporated Employees</h3>
                            <p class="panel-subtitle">Create or View Payroll</p>
                        </div>
                        <div class="panel-body">
                            <!-- Create Payroll-->
                            <div class="row ">
                                <div class="center-div w-50">
                                    <h4><strong>New Payroll</strong></h4>
                                    <form method="POST" autocomplete="off">
                                        <div class="input-group my-1">
                                            <span class="input-group-addon lnr lnr-calendar-full" id="basic-addon1"></span>
                                            <input type="text" name="pdate" id="pdate" class="form-control numericInput drp-calendar" placeholder="Pick a date range" aria-describedby="basic-addon1">
                                            <style type="text/css">
                                                .drp-calendar.right thead>tr:nth-child(2) {
                                                    display: none;
                                                }

                                                .drp-calendar.right tbody {
                                                    display: none;
                                                }

                                                .daterangepicker.ltr .ranges,
                                                .daterangepicker.ltr .drp-calendar {
                                                    float: none !important;
                                                }

                                                .daterangepicker .drp-calendar.right .daterangepicker_input {
                                                    position: absolute;
                                                    top: 45px;
                                                    left: 8px;
                                                    width: 230px;
                                                }

                                                .drp-calendar.left .drp-calendar-table {
                                                    margin-top: 45px;
                                                }
                                            </style>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 text-right">
                                                <input type="reset" class="btn btn-danger">
                                            </div>
                                            <div class="col-sm-6 text-left">
                                                <button type="submit" name="new-payroll" class="btn btn-primary">Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <!-- Show Payroll -->
                            <div class="row">
                                <div class="center-div w-50">
                                    <h4><strong>Previous Payroll</strong></h4>
                                    <table id="paryollTable" class="table table-striped">
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
                            </div>
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
    <?php include('scripts.html');?>
    <script type="text/javascript">
        // Restricts input for each element in the set of matched elements to the given inputFilter.
        (function($) {
            $.fn.inputFilter = function(inputFilter) {
                return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    }
                });
            };
        }(jQuery));

        $(document).ready(function() {
            // Restrict input to digits by using a regular expression filter.
            $(".numericInput").inputFilter(function(value) {
                return /^\d*$/.test(value);
            });
        });

        $(document).ready(function() {
            $('#paryollTable').DataTable({
                // Get data from database
                processing: true,
                serverSide: true,
                ajax: "../includes/ajax-view-payroll.php",
                // DOM
                dom: 'rtip',
                pageLength: 10,
                order: [
                    [2, 'desc']
                ],
                aoColumnDefs: [{
                    bVisible: false,
                    aTargets: [2,3]
                }],
                // ordering: false,
                // Clickable row
                fnDrawCallback: function() {
                    $('#paryollTable tbody tr').click(function() {
                        var table = $('#paryollTable').dataTable(),
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
