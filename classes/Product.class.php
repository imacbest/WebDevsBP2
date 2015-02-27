<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 27-2-2015
 * Time: 13:32
 */

class Product {
    private $conn;
    private $productNummer;
    private $productNaam;
    private $omschrijving;
    private $categorie;
    private $prijs;
    private $vooraad;
    private $imgGroot;
    private $imgKlein;

    public function __construct($productID, $conn){
        $this->conn = $conn;
        if(!empty($productID)) {
            if (is_numeric($productID)) {
                $this->productNummer = $productID;
                $tsql = "SELECT * FROM PRODUCT WHERE PRODUCTNUMMER = 10"; // '" .addslashes($productID)."' ";
                $result = sqlsrv_query($this->conn->getConn(), $tsql, null) or die(print_r(sqlsrv_errors()));
                echo count(sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC));
                if (sizeof(sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) != 0) {
                    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
                    $this->productNaam = $row['PRODUCTNAAM'];

                } else {
                    echo "Product is niet gevonden.";
                }
            }else{
                echo "Opgegeven product id is geen nummer";
            }
        }else{
            echo "SQL Error: product id niet valide.";
        }
    }

    public function getProductNaam(){
        return $this->productNaam;
    }

}