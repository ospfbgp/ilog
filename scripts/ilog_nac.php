<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'nac';

// Table's primary key
$primaryKey = 'seq';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
        array( 'db' => 'seq',            'dt' => 0 ),
        array( 'db' => 'datetime',       'dt' => 1 ),
        array( 'db' => 'macAddress',     'dt' => 2 ),
        array( 'db' => 'ipAddress',      'dt' => 3 ),
        array( 'db' => 'switchIP',       'dt' => 4 ),
        array( 'db' => 'switchLocation', 'dt' => 5 ),
        array( 'db' => 'username',       'dt' => 6 ),
        array( 'db' => 'reason',         'dt' => 7 ),
        array( 'db' => 'stateDescr',     'dt' => 8 ),
        array( 'db' => 'authType',       'dt' => 9 ),
        array( 'db' => 'state',          'dt' => 10 ),
        array( 'db' => 'switchPortId',   'dt' => 11 ),
        array( 'db' => 'switchPort',     'dt' => 12 ),
        array( 'db' => 'extendedState',  'dt' => 13 ),
        array( 'db' => 'policy',         'dt' => 14 ),
        array( 'db' => 'nacApplianceIp', 'dt' => 15 ),
        array( 'db' => 'nacProfileName', 'dt' => 16 )
);

// SQL server connection information
$sql_details = array(
        'user' => 'ilog',
        'pass' => 'ilogpassword',
        'db'   => 'ilog',
        'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
        SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
