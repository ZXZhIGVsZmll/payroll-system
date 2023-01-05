<?php
$link = mysqli_connect("localhost", "user", "pass", "payrolldb");
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = ?";

    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);

        // Set parameters
        $param_term = $_REQUEST["term"] . '%';

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo $row["fullname"] . ',' . $row["salary_rate"] . ',' . $row["allowance"] . ',' . $row["COLA"] . ',' . $row["tax"] . ',' . $row["SSS_Premium"] . ',' . $row["SSS_Loan"] . ',' . $row["MDMF_Premium"] . ',' . $row["MDMF_Loan"] . ',' . $row["MDMF_Housing"] . ',' . $row["MDMF_2"] . ',' . $row["PHIC_Premium"];
                }
            } else{
                echo "ID not found";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// close connection
mysqli_close($link);
