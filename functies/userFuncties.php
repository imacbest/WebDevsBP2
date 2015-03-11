<?php
/**
 * checkt of de gebruiker wel in de database zit
 * @param $username gebruikersnaam
 * @param $password wachtwoord
 */
function checkLogin($username, $password){
    global $db;
    $password = hash('sha256', $password);
    $query = "SELECT * FROM GEBRUIKER WHERE GEBRUIKERSNAAM like '".addslashes($username)."'
     AND WACHTWOORD like '".$password."'";
    $result = sqlsrv_query($db->getConn(),$query, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
    if(sqlsrv_num_rows($result) == 1 ){
        //echo "User found!";
        $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
        $_SESSION['uid'] = $row['userID'];
        header("Refresh:0");
    }else{
        echo "Gebruiker is niet gevonden";
    }
}

/**
 * Voegt een nieuwe gebruiker toe aan de database
 * @param $username gebruikersnaam
 * @param $firstname voornaam
 * @param $tussenvoegsel tussenvoegsel
 * @param $lastname achternaam
 * @param $street straat
 * @param $huisnummer huisernummer
 * @param $postcode postcode
 * @param $woonplaats woonplaats
 * @param $email email adres
 * @param $sexe geslacht
 * @param $password wachtwoord
 */
function createUser($username, $firstname, $tussenvoegsel, $lastname, $street,  $huisnummer, $postcode,
                   $woonplaats, $email, $sexe, $password){
    global $db;
    $password = hash('sha256', $password);
    $sql="INSERT INTO GEBRUIKER ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM],
    [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD])
    VALUES('".addslashes($username)."', '".addslashes($firstname)."', '".addslashes($tussenvoegsel)."','".addslashes($lastname)."', '".addslashes($street)."', '".addslashes($huisnummer)."',
    '".addslashes($postcode)."', '".addslashes($woonplaats)."', '".addslashes($email)."', '".addslashes($sexe)."', '".$password."')";
    sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));

}

/**
 *  Logt de gebruiker uit en vernietigd de sessie, gebruiker wordt verolgends naar ?nieuws gestuurd
 */
function logout(){
    session_destroy();
    header("Location: ?nieuws");
}

?>