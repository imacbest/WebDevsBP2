<?php


function productnaam_check($naam) {
    global $db;
    $naam_query = "SELECT PRODUCTNAAM FROM PRODUCT WHERE PRODUCTNAAM='" . $naam . "';";
    $naam_sql = sqlsrv_query($db->getConn(), $naam_query) or die (print_r(sqlsrv_errors()));
    if (!sqlsrv_has_rows($naam_sql)) {
        return false;
    }
    return true;
}

function prijs_check($prijs) {
    if(is_numeric($prijs)) {
        return true;
    }
    return false;
}


?>