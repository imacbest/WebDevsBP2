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
$tsql = "SELECT PRODUCTNAAM, OMSCHRIJVING FROM PRODUCT";
$result = sqlsrv_query( $conn, $tsql, null) or die( print_r( sqlsrv_errors() )  );
if ( $result === false){
    die( print_r( sqlsrv_errors() ) );
}
while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
    echo '<p>'. $row['PRODUCTNAAM'].", ".$row['OMSCHRIJVING']."</p><br />";
}
sqlsrv_free_stmt($result);
?>
