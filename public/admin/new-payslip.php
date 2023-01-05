<?php
include ('../includes/login-include.php');
include ('../includes/payroll-action.php');

// Check logged in user and type
if (!isset($_SESSION['email'])) {
    header('location: ../index.php');
} elseif ($_SESSION['type'] == 'employee') {
    header('location: employee-dashboard.php');
}
$sqlpay = "SELECT `id`, `date_range` FROM `payroll` ORDER BY `id` DESC";
$resultpay = $connect->query($sqlpay);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Create New Payslip</title>
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
                        <form method="POST" autocomplete="off">
                            <div class="panel-heading">
                                <h3 class="panel-title">Lorem Ipsum International Incorporated Employees</h3>
                                <p class="panel-subtitle">Create Payslip</p>
                                <span><i style="color: red; font-size: 12px;"><?php echo $msg; ?></i></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label for="payslipDate" class="control-label">Select Payroll</label><br>
                                        <select id="payslipDate" name="pdate" class="form-control" required>
                                            <option value="" disabled selected>-- Select Payroll Period --</option>
                                            <?php
                                            if ($resultpay->num_rows > 0) {
                                                while($row = $resultpay->fetch_assoc()) {
                                                    echo '<option value="'.$row['id'].'">'.$row['date_range'].'</option>';
                                                }
                                            } else {
                                                echo '<option disabled>No results found</option>';
                                            }
                                            $connect->close();
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label for="empID" class="control-label">Employee ID</label>
                                        <span style="display: flex;">
                                            <input type="text" id="empID" name="empID" class="calc form-control" placeholder="ID" maxlength="3" required>
                                        </span>
                                    </div>
                                    <div class="col-sm-5 form-group">
                                        <label for="empname" class="control-label">Employee Name</label>
                                        <input type="text" id="empname" name="empname" class="form-control" placeholder="Full Name" readonly>
                                    </div>
                                </div>
                                <hr>
                                <!-- Base salary and days present -->
                                <div class="row left-right-padding">
                                    <!-- Left -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Base Salary</label>
                                            <input type="text" id="bsalary" name="bsalary" class="calc form-control" value="0.00" readonly>
                                            <label class="control-label">Bi-monthly Salary</label>
                                            <input type="text" id="bmsalary" name="bmsalary" class="calc form-control" value="0.00" readonly>
                                            <label class="control-label">Daily Salary</label>
                                            <input type="text" name="salary" class="calc form-control" value="0.00" readonly>
                                        </div>
                                    </div>
                                    <!-- Right -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Regular day (Days)</label>
                                            <input type="text" name="dp-reg" class="calc form-control" placeholder="Days Present">
                                            <label class="control-label">Special Holiday 130% (Hours)</label>
                                            <input type="text" name="dp-sh" class="calc form-control" placeholder="Hours Rendered Special Holiday">
                                            <label class="control-label">Regular Holiday 200% (Hours)</label>
                                            <input type="text" name="dp-rh" class="calc form-control" placeholder="Hours Rendered Regular Holiday">
                                            <label class="control-label">Base Total</label>
                                            <input type="text" name="b-total" class="calc form-control" value="0.00" readonly>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- Addition and deduction -->
                                <div class="row left-right-padding">
                                    <!-- Left -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Overtime (Hours)</label>
                                            <input type="text" name="ot-h" class="calc form-control" placeholder="Overtime hours">
                                            <label class="control-label">Overtime value</label>
                                            <input type="text" name="ot-val" class="calc form-control" value="0.00" readonly>
                                            <label class="control-label">Allowance</label>
                                            <input type="text" id="allowance" name="allowance" class="calc form-control" value="0.00">
                                            <label class="control-label">Cost of living allowance</label>
                                            <input type="text" id="cola" name="cola" class="calc form-control" value="0.00">
                                            <label class="control-label">13th month bonus</label>
                                            <input type="text" name="bonus" class="calc form-control" value="0.00">
                                            <label class="control-label">Total addition</label>
                                            <input type="text" name="add-t" class="calc form-control" value="0.00" readonly>
                                        </div>
                                    </div>
                                    <!-- Right -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Undertime (Hours)</label>
                                            <input type="text" name="ut-h" class="calc form-control" placeholder="Undertime hours">
                                            <label class="control-label">Undertime value</label>
                                            <input type="text" name="ut-val" class="calc form-control" value="0.00" readonly>
                                            <label class="control-label">Late (Minutes)</label>
                                            <input type="text" name="late-m" class="calc form-control" placeholder="Late minutes">
                                            <label class="control-label">Late value</label>
                                            <input type="text" name="late-v" class="calc form-control" value="0.00" readonly>
                                            <label class="control-label">Tax</label>
                                            <input type="text" id="tax" name="tax" class="calc form-control" value="0.00">
                                            <label class="control-label">SSS Premium</label>
                                            <input type="text" id="sss-p" name="sss-p" class="calc form-control" value="0.00">
                                            <label class="control-label">SSS Loan</label>
                                            <input type="text" id="sss-l" name="sss-l" class="calc form-control" value="0.00">
                                            <label class="control-label">HDMF Premium</label>
                                            <input type="text" id="mdmf-p" name="mdmf-p" class="calc form-control" value="0.00">
                                            <label class="control-label">HDMF Loan</label>
                                            <input type="text" id="mdmf-l" name="mdmf-l" class="calc form-control" value="0.00">
                                            <label class="control-label">HDMF Housing</label>
                                            <input type="text" id="mdmf-h" name="mdmf-h" class="calc form-control" value="0.00">
                                            <label class="control-label">HDMF 2</label>
                                            <input type="text" id="mdmf-2" name="mdmf-2" class="calc form-control" value="0.00">
                                            <label class="control-label">PHIC Premium</label>
                                            <input type="text" id="phic" name="phic" class="calc form-control" value="0.00">
                                            <label class="control-label">Total deduction</label>
                                            <input type="text" name="minus-t" class="calc form-control" value="0.00" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer sticky">
                                <div class="row my-1 w-50 center-block">
                                    <label class="control-label">Net Pay</label>
                                    <input type="text" value="0.00" name="total" class="form-control" readonly>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-right">
                                        <input type="reset" class="btn btn-danger">
                                    </div>
                                    <div class="col-sm-6 text-left">
                                        <input type="submit" name="new-payslip" value="Create Payslip" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
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
        // Calculation
        /***** Base *****/
        $(".calc").on("keyup change paste", function() {
            /***** Base divided by 13 days *****/
            // var base = $("input[type=text][name=bsalary]").val(),
            // 	daily = base / 13,
            // 	fd = daily.toFixed(2);
            // $("input[type=text][name=salary]").val(fd);
            var base = $("input[type=text][name=bsalary]").val(),
                bimon = base / 2, // monthly salary divided by 2 to get bimonthly salary
                fbm = bimon.toFixed(2), // fix bimonthly value
                daily = bimon / 13, // bimonthly salary divided by 13 to get daily salary
                fd = daily.toFixed(2); // fix daily value
            $("input[type=text][name=bmsalary]").val(fbm);
            $("input[type=text][name=salary]").val(fd);

            /***** Base salary *****/
            var b = $("input[type=text][name=dp-reg]").val(),
                c = $("input[type=text][name=dp-sh]").val(),
                d = $("input[type=text][name=dp-rh]").val(),
                ab = daily * b, // Daily
                ac = daily * c * 0.1625, // hours-special holiday
                ad = daily * d * 0.25, //
                abcd = ab + ac + ad,
                aaa = abcd.toFixed(2);
            $("input[type=text][name=b-total]").val(aaa); // show base total

            /***** Addition *****/
            var slryday = daily / 8, // convert daily to hourly
                oth = $("input[type=text][name=ot-h]").val(), // get number of ot hours, multiplier
                ee = slryday * oth,
                fee = ee.toFixed(2);
            $("input[type=text][name=ot-val]").val(fee); // display overtime value
            // Get values
            var e = +$("input[type=text][name=ot-val]").val(),
                f = +$("input[type=text][name=allowance]").val(),
                g = +$("input[type=text][name=cola]").val(),
                gh = +$("input[type=text][name=bonus]").val(),
                efg = e + f + g + gh,
                bbb = efg.toFixed(2);
            $("input[type=text][name=add-t]").val(bbb); // show addition total

            /***** Deduction *****/
            var slryday = daily / 8, // convert daily to hourly
                uth = $("input[type=text][name=ut-h]").val(), // get number of ut hours, multiplier
                hh = slryday * uth,
                fhh = hh.toFixed(2),
                lm = $("input[type=text][name=late-m]").val(), // get number of late mintues, multiplier
                lv = slryday * lm / 60,
                flv = lv.toFixed(2);
            $("input[type=text][name=ut-val]").val(fhh); // display undertime value
            $("input[type=text][name=late-v]").val(flv); // display late value
            // Get values
            var h = +$("input[type=text][name=ut-val]").val(),
                i = +$("input[type=text][name=tax]").val(),
                j = +$("input[type=text][name=sss-p]").val(),
                k = +$("input[type=text][name=sss-l]").val(),
                l = +$("input[type=text][name=mdmf-p]").val(),
                m = +$("input[type=text][name=mdmf-l]").val(),
                n = +$("input[type=text][name=mdmf-h]").val(),
                o = +$("input[type=text][name=mdmf-2]").val(),
                p = +$("input[type=text][name=phic]").val(),
                q = +$("input[type=text][name=late-v]").val(),
                hij = h + i + j + k + l + m + n + o + p + q,
                ccc = hij.toFixed(2);
            $("input[type=text][name=minus-t]").val(ccc); // show deduction total

            /***** Final calculation *****/
            var // x = +$("input[type=text][name=b-total]").val(),
                // y = +$("input[type=text][name=add-t]").val(),
                // z = +$("input[type=text][name=minus-t]").val(),
                // xyz = x + y - z;
                x = abcd + efg - hij;
            xyz = x.toFixed(2);
            $("input[type=text][name=total]").val(xyz);
            //$("input[type=text][name=total]").val(xyz);
            //$(this).val(parseFloat($(this).val()).toFixed(2));
        });

        /***** ID search *****/
        $(document).ready(function() {
            $("input[type=text][name=empID]").on("keyup input", function() {
                // Get input value on change
                var inputVal = $(this).val();
                if (inputVal.length) {
                    $.get("../includes/payslip-search.php", {
                        term: inputVal
                    }).done(function(data) {
                        // Split data retrieved from php
                        val = data.split(",");
                        name = val[0];
                        salary = val[1];
                        allowance = val[2];
                        cola = val[3];
                        tax = val[4];
                        sssp = val[5];
                        sssl = val[6];
                        mdmfp = val[7];
                        mdmfl = val[8];
                        mdmfh = val[9];
                        mdmf2 = val[10];
                        phic = val[11];
                        // Display data to textboxes
                        $('#empname').val(name);
                        $('#bsalary').val(salary);
                        $('#allowance').val(allowance);
                        $('#cola').val(cola);
                        $('#tax').val(tax);
                        $('#sss-p').val(sssp);
                        $('#sss-l').val(sssl);
                        $('#mdmf-p').val(mdmfp);
                        $('#mdmf-l').val(mdmfl);
                        $('#mdmf-h').val(mdmfh);
                        $('#mdmf-2').val(mdmf2);
                        $('#phic').val(phic);
                    });
                }
            });
        });
    </script>
</body>

</html>
