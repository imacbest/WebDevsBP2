<?php

public function setVoorraad($productID, $addvoorraad)
{
    global $db;
    $voorraad_query = "UPDATE PRODUCT SET VOORRAAD=VOORRAAD +'" .($addvoorraad). "'WHERE PRODUCTNUMMBER= " . $productID;
    sqlsrv_query($db->getConn(), $voorraad_query, NULL) or die (print_r(sqlsrv_errors()));
}



?>