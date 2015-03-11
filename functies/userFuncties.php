<?php
function checkLogin($username, $password, $db){
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

function createUser($username, $firstname, $tussenvoegsel, $lastname, $street,  $huisnummer, $postcode,
                   $woonplaats, $email, $sexe, $password, $db){
    $password = hash('sha256', $password);
    $sql="INSERT INTO GEBRUIKER ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM],
    [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD])
    VALUES('".addslashes($username)."', '".addslashes($firstname)."', '".addslashes($tussenvoegsel)."','".addslashes($lastname)."', '".addslashes($street)."', '".addslashes($huisnummer)."',
    '".addslashes($postcode)."', '".addslashes($woonplaats)."', '".addslashes($email)."', '".addslashes($sexe)."', '".$password."')";
    sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));

}
function logout(){
    session_destroy();
    header("Location: ?nieuws");
}

/**
 * Checkt of het ingevoerde emailadres een geldig email adres is
 * @param $email
 * @return bool, false --> emailadres is niet geldig, true --> emailadres is geldig
 */
function email_validator($email){
       if (eregi("^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,4}$",$email)){
        return true;
       }
    return false;
}

/**
 * Checkt of het gebruikersnaam al in de database aanwezig is
 * @param $gebruikersnaam
 * @return bool, false --> gebruikersnaam is al bezet, true --> gebruikersnaam is nog niet bezet
 */
function gebruikersnaam_check($gebruikersnaam) {
    global $db;
    $gebruikersnaam_query = "SELECT GEBRUIKERSNAAM FROM GEBRUIKER WHERE GEBRUIKERSNAAM='" . $gebruikersnaam . "';";
    $gebruikersnaam_sql = sqlsrv_query($db->getConn(), $gebruikersnaam_query) or die (print_r(sqlsrv_errors()));
    if (!sqlsrv_has_rows($gebruikersnaam_sql)) {
       return false;
    }
    return true;
}


/**
 * Checkt of het emailadres al in de database aanwezig is
 * @param $email
 * @return bool, false --> emaildres is al aanwezig, true --> emailadres is nog niet aanwezig
 */
function email_check($email) {
    global $db;
    $gebruikersnaam_query = "SELECT EMAIL FROM GEBRUIKER WHERE EMAIL='" . $email . "';";
    $gebruikersnaam_sql = sqlsrv_query($db->getConn(), $gebruikersnaam_query) or die (print_r(sqlsrv_errors()));
    if (!sqlsrv_has_rows($gebruikersnaam_sql)) {
        return false;
    }
    return true;
}
?>