<?php

class User {
    /**
     * User id
     * @var int
     */
    private $uid;
    private $username;
    private $voornaam;
    private $tussenvoegsel;
    private $achternaam;
    private $straatnaam;
    private $huisnummer;
    private $postcode;
    private $woonplaats;
    private $email;
    private $phonenumber;
    private $sexe;
    private $wachtwoord;
    private $rechten;
    private $db;

    /**
     * constructor van de functie
     * initaliseert alle gebruikers variabelen
     * @param $uid user id
     * @param $conn database connectie
     */
    public function __construct($uid){
        global $db;
        $this->conn = $db;
        if(!empty($uid)){
            if(is_numeric($uid)){
                $this->uid = $uid;
                $tsql = "SELECT * FROM GEBRUIKER WHERE userID = " .$uid;
                $result = sqlsrv_query($this->conn->getConn(), $tsql, null) or die(print_r(sqlsrv_errors()));
                if(sqlsrv_has_rows ($result)){
                    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
                    $this->username = $row['GEBRUIKERSNAAM'];
                    $this->voornaam = $row['VOORNAAM'];
                    $this->tussenvoegsel = $row['TUSSENVOEGSEL'];
                    $this->achternaam = $row['ACHTERNAAM'];
                    $this->straatnaam = $row['STRAATNAAM'];
                    $this->huisnummer = $row['HUISNUMMER'];
                    $this->postcode = $row['POSTCODE'];
                    $this->woonplaats = $row['WOONPLAATS'];
                    $this->email = $row['EMAIL'];
                    $this->phonenumber = $row['TELEFOONNUMMER'];
                    $this->sexe = $row['SEXE'];
                    $this->wachtwoord = $row['WACHTWOORD'];
                    $this->rechten = $row['RECHTEN'];
                }

            }
        }

    }


    public function getUsername()
    {
        return $this->username;
    }

    public function getVoornaam()
    {
        return $this->voornaam;
    }

    public function getTussenvoegsel()
    {
        return $this->tussenvoegsel;
    }

    public function getAchternaam()
    {
        return $this->achternaam;
    }

    public function getStraatnaam()
    {
        return $this->straatnaam;
    }

    public function getHuisnummer()
    {
        return $this->huisnummer;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function getRechten()
    {
        return $this->rechten;
    }

    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }



}