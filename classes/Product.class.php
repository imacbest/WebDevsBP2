<?php

class Product {
    private $conn;
    private $productNummer;
    private $productNaam;
    private $omschrijving;
    private $categorie;
    private $prijs;
    private $vooraad;
    private $img;
    private $inhoud;

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
                $result = sqlsrv_query($this->conn->getConn(), $tsql, null) or die(print_r(sqlsrv_errors()));
                if(sqlsrv_has_rows ($result)){
                    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
                    $this->productNaam = $row['PRODUCTNAAM'];
                    $this->omschrijving =  ($row['OMSCHRIJVING']);
                    $this->categorie = $row['CATEGORIE'];
                    $this->prijs = $row['PRIJS'];
                    $this->vooraad = $row['VOORRAAD'];
                    $this->img = $row['afbeelding'];
                    $this->inhoud = $row['INHOUD'];
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

    public function getImg()
    {
        return $this->img;
    }
    public function getInhoud(){
        return $this->inhoud;
    }


    public function getVooraad()
    {
        return $this->vooraad;
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



}