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
    private $db;

    public function User($uid, $conn){
        $this->conn = $conn;
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
                    $this->sexe = $row['SEXE'];
                    $this->wachtwoord = $row['WACHTWOORD'];
                }

            }
        }

    }

    public function __construct($db){
        $this->db = $db;
    }

    public function checkLogin($username, $password){
        $query = "SELECT * FORM GEBRUIKERS WHERE GEBRUIKERSNAAM = '".addslashes($username)."'
            AND WACHTWOORD = '".addslashes($password)."'";
        $result = sqlsrv_query($this->db->getConn(), $query, array(), array("Srollable" = > SQLSRV_CURSOR_KEYSET));
        if(sqlsrv_num_rows($result) == 1){
            echo "User found!";
            $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
            $_SESSION['uid'] = $row['userID'];
        }else if (sqlsrv_num_rows($result) > 1){
            echo "Meerdere gebruikers gevonden";
        }else{
            echo "Gebruiker is niet gevonden";
        }
    }

    public function logout(){
        session_destroy();

    }

    function createUser($username, $password, $voornaam, $tussenvoegsel, $achternaam, $straatnaam, $postcode,
                        $huisnummer, $woonplaats, $email, $sexe){

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

    public function getSexe()
    {
        return $this->sexe;
    }

    public function getUid()
    {
        return $this->uid;
    }


}