<?php

class Product {
    private $conn;
    private $productNummer;
    private $productNaam;
    private $omschrijving;
    private $categorie;
    private $prijs;
    private $voorraad;
    private $img;
    private $inhoud;
    private $gerelateerdeProductenID;

    /**
     * Initialiseert de product class, en zorgt dat alle data opgehaald kan worden.
     * @param $productID het id van het product
     */
    public function __construct($productID){
        global $db;
        $this->conn = $db;
        if(!empty($productID)) {
            if (is_numeric($productID)) {
                $this->productNummer = $productID;
                $tsql = "SELECT * FROM PRODUCT WHERE PRODUCTNUMMER = " .$productID;
                $result = sqlsrv_query($this->conn->getConn(), $tsql, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
                if(sqlsrv_num_rows($result) == 1 ){
                    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
                    $this->productNaam = $row['PRODUCTNAAM'];
                    $this->omschrijving =  ($row['OMSCHRIJVING']);
                    $this->categorie = $row['CATEGORIE'];
                    $this->prijs = $row['PRIJS'];
                    $this->voorraad = $row['VOORRAAD'];
                    $this->img = $row['afbeelding'];
                    $this->inhoud = $row['INHOUD'];

                    $tsql = "SELECT * FROM PRODUCT_GERELATEERD_PRODUCT WHERE PRODUCTNUMMER = " . $productID;
                    $result = sqlsrv_query($this->conn->getConn(), $tsql, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));

                    if(sqlsrv_num_rows($result) <= 6 ) {
                        $i = 0;
                        while($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ){
                            $this->gerelateerdeProductenID[$i] = $row['PRODUCTNUMMER_GERELATEERD_PRODUCT'];
                            $i++;
                        }
                    }

                    return true;
                } else {
                    echo "Er is iets fout gegeaan, waarschijnlijk is het product niet gevonden.";
                }
            }else{
                echo "Opgegeven product id is geen nummer";
            }
        }else{
            echo "SQL Error: product id niet valide.";
        }
        return die();
    }

    public function getProductNaam(){
        return $this->productNaam;
    }

    public function getImg()
    {
        return $this->img;
    }
    public function getInhoud(){
        return $this->inhoud;
    }


    public function getVoorraad()
    {
        return $this->voorraad;
    }

    public function getPrijs()
    {
        return $this->prijs;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    public function getProductNummer()
    {
        return $this->productNummer;
    }

    public function setVoorraad($addvoorraad)
    {
        $voorraad_query = "UPDATE PRODUCT SET VOORRAAD=VOORRAAD +'" .$addvoorraad. "'WHERE PRODUCTNUMMBER= " . $this->getProductNummer();
        sqlsrv_query($this->conn->getConn(), $voorraad_query, NULL) or die (print_r(sqlsrv_errors()));
    }

    public function getGerelateerdeProductenID()
    {
        return $this->gerelateerdeProductenID;
    }




}