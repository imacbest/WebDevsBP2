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

    public function User($uid){
        if(!empty($uid)){
            if(is_numeric($uid)){
                $this->uid = $uid;
                $tsql = "SELECT * FROM GEBRUIKER WHERE userID = " .$uid;
                $result = sqlsrv_query($this->conn->getConn(), $tsql, null) or die(print_r(sqlsrv_errors()));
                if(sqlsrv_has_rows ($result)){
                    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
                    $this->achternaam = $row['ACHTERNAAM'];
                    $this->email = $row[''];
                    $this->email = $row[''];
                    $this->email = $row[''];
                    $this->email = $row[''];
                }

            }
        }

    }
}