<?php
// DB table to use
$table = 'payroll';

// Table's primary key
$primaryKey = 'id';

$columns = array(
	array( 'db' => 'id', 'dt' => 0 ),
	array( 'db' => 'date_range', 'dt' => 1 ),
	array( 'db' => 'date_start', 'dt' => 2 ),
	array( 'db' => 'date_end', 'dt' => 3 )
);

// SQL server connection information
$sql_details = array(
	'user' => 'user',
	'pass' => 'pass',
	'db'   => 'payrolldb',
	'host' => 'localhost'
);

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
