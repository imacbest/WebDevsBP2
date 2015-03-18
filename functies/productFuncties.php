<?php


function productnaam_check($naam) {
    global $db;
    $naam_query = "SELECT PRODUCTNAAM FROM PRODUCT WHERE PRODUCTNAAM='" . $naam . "'";
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

function createProduct($productnaam, $omschrijving, $categorie, $prijs, $voorraad,  $inhoud, $afbeelding){
    global $db;
    $sql="INSERT INTO PRODUCT ( PRODUCTNAAM, OMSCHRIJVING, CATEGORIE, PRIJS, VOORRAAD, INHOUD, afbeelding)
    VALUES('".addslashes($productnaam)."', '".addslashes($omschrijving)."', '".addslashes($categorie)."','".addslashes($prijs)."', '".addslashes($voorraad)."',
    '".addslashes($inhoud)."', '".addslashes($afbeelding)."')";
    sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));
}

function updateProduct($productnaamHuidig, $productnaam, $omschrijving, $categorie, $prijs, $voorraad,  $inhoud, $afbeelding)
{
    global $db;
    $sql = "UPDATE PRODUCT SET [PRODUCTNAAM] = '" . addslashes($productnaam) . "', [OMSCHRIJVING] = '" . addslashes($omschrijving) . "',[CATEGORIE] = '" . addslashes($categorie) . "', [PRIJS] = '" . addslashes($prijs) . "',
     [VOORRAAD] = '" . addslashes($voorraad) . "', [INHOUD] = '" . addslashes($inhoud) . "',
     [afbeelding] = '" . addslashes($afbeelding) . "' WHERE [PRODUCTNAAM] = '" . addslashes($productnaamHuidig) . "'";
    sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));
}

function deleteProduct($productnaam) {
                global $db;
                $sql="DELETE FROM PRODUCT WHERE [PRODUCTNAAM] = '" . addslashes($productnaam) . "'";
                sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));
}

/**
 * functie die checkt of een product wel in voorraad is, product id moet in $this->productID zitten!
 * @return int voorraad
 */
function getVoorraad($productID){
    global $db;
    $query = "SELECT * FROM PRODUCT WHERE productnummer = '" . $productID . "'";
    $result = sqlsrv_query($db->getConn(), $query, null) or die(print_r(sqlsrv_errors()));
    if(sqlsrv_has_rows ($result)) {
        $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
        return $row['VOORRAAD'];
    }
}

function removeProductVoorraad($productID, $amount){
    global $db;
    global $cart;
    $nieuweVoorraad = getVoorraad($productID) - $amount;
    if($nieuweVoorraad < 0){
        $nieuweVoorraad = getVoorraad($productID);
    }
    $query = "UPDATE PRODUCT SET VOORRAAD = '".$nieuweVoorraad."' WHERE PRODUCTNUMMER = ". $productID;
    sqlsrv_query($db->getConn(), $query, NULL) or die (print_r(sqlsrv_errors()));
    $cart->removeAllFromCart($productID);
}


?>