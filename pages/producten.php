<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 10:47
 */
?>
<h1>Producten</h1>

<?php
$db->openDBConnection();
$tsql = "SELECT PRODUCTNAAM, OMSCHRIJVING FROM PRODUCT";
$result = sqlsrv_query( $db->getConn(), $tsql, null) or die( print_r( sqlsrv_errors() )  );

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
    echo '<p>'. $row['PRODUCTNAAM'].", ".$row['OMSCHRIJVING']."</p><br />";
}
sqlsrv_free_stmt($result);

$query = "SELECT * FROM GEBRUIKER";
$result = sqlsrv_query($db->getConn(), $query, null) or die (print_r(sqlsrv_errors() ));

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
    echo '<p>'. $row['GEBRUIKERSNAAM'] . '</p>';
}

?>

<?php

//$serverName = "(local)\sqlexpress";
//$connectionInfo = array( "Database"=>"WEBSHOP", "UID"=>"sa", "PWD"=>"DbAp");
//$conn = sqlsrv_connect( $serverName, $connectionInfo);

//if(!$conn){
//echo "Connection could not be established.<br />";
//die( print_r( sqlsrv_errors(), true));
//}


?>
