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
$table = 'ignition_catId_10';

// Table's primary key
$primaryKey = 'seq';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'seq',                        
           'dt' => 'seq' ),
    array( 'db' => 'Id',                         
           'dt' => 'Id' ),
    array( 'db' => 'datetime',                   
           'dt' => 'datetime' ),
    array( 'db' => 'host',                       
           'dt' => 'host' ),
    array( 'db' => 'AuthServerName',             
           'dt' => 'AuthServerName' ),
    array( 'db' => 'AuthenticationDecision',     
           'dt' => 'AuthenticationDecision' ),
    array( 'db' => 'AuthenticatorIpAddr',        
           'dt' => 'AuthenticatorIpAddr' ),
    array( 'db' => 'AuthenticatorName',          
           'dt' => 'AuthenticatorName' ),
    array( 'db' => 'AuthenticatorType',          
           'dt' => 'AuthenticatorType' ),
    array( 'db' => 'UserNameAttr',               
           'dt' => 'UserNameAttr' ),
    array( 'db' => 'AuthorizationDecision',      
           'dt' => 'AuthorizationDecision' ),
    array( 'db' => 'AuthorizationRuleIds',       
           'dt' => 'AuthorizationRuleIds' ),
    array( 'db' => 'CallingStationIdAttr',       
           'dt' => 'CallingStationIdAttr' ),
    array( 'db' => 'CredentialValidationPolicy', 
           'dt' => 'CredentialValidationPolicy' ),
    array( 'db' => 'Description',                
           'dt' => 'Description' ),
    array( 'db' => 'DirectoryServiceName',       
           'dt' => 'DirectoryServiceName' ),
    array( 'db' => 'NASIPAddrAttr',              
           'dt' => 'NASIPAddrAttr' ),
    array( 'db' => 'ProvisioningValues',         
           'dt' => 'ProvisioningValues' ),
    array( 'db' => 'ServiceCatName',             
           'dt' => 'ServiceCatName' ),
    array( 'db' => 'UserId',                     
           'dt' => 'UserId' )
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
