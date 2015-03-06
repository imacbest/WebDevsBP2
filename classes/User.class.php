<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 6-3-2015
 * Time: 13:09
 */

class User {
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
    private $sexe;
    private $wachtwoord;

    public function User($uid){
        if(!empty($uid)){
            if(is_numeric($uid)){
                $this->uid = $uid;
                $tsql = "SELECT * FROM GEBRUIKER WHERE userID = " .$uid;
                $result = sqlsrv_query($this->conn->getConn(), $tsql, null) or die(print_r(sqlsrv_errors()));
                if(sqlsrv_has_rows ($result)){
                    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
                    $this->username = $row['GEBRUIKSERSNAAM'];
                    $this->voornaam = $row['VOORNAAM'];
                    $this->tussenvoegsel = $row['TUSSENVOEGSEL'];
                    $this->achternaam = $row['ACHTERNAAM'];
                    $this->straatnaam = $row['STRAATNAAM'];
                    $this->huisnummer = $row['HUISNUMMER'];
                    $this->postcode = $row['POSTCODE'];
                    $this->woonplaats = $row['WOONPLAATS'];
                    $this->email = $row['EMAIL'];
                    $this->sexe = $row['SEXE'];
                    $this->wachtwoord = $row['WACHTWOORD'];
                }

            }
        }

    }
}