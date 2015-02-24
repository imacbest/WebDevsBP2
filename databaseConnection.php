<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 11:11
 */
$serverName = "(local)\sqlexpress";
$connectionInfo = array( "Database"=>"WEBSHOP", "UID"=>"sa", "PWD"=>"DbAp");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if(!$conn){
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}

function closeDBConnection($conn){
    sqlsrv_close($conn);
}

?>
