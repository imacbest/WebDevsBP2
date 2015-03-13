<?php
/**
 * checkt of de gebruiker wel in de database zit
 * @param $username gebruikersnaam
 * @param $password wachtwoord
 */
function checkLogin($username, $password){
    global $db;
    global $page;
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
function checkIfUserIsAdmin(){
    global $user;
    if(array_key_exists('uid', $_SESSION)) {
        if ($user->getRechten() != 1) {
            return true;
        }
    }
    return false;
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
 * @param $phonenumber telefoonnummer
 * @param $sexe geslacht
 * @param $password wachtwoord
 */
function createUser($username, $firstname, $tussenvoegsel, $lastname, $street,  $huisnummer, $postcode,
                   $woonplaats, $email, $phonenumber, $sexe, $password){
    global $db;
    $password = hash('sha256', $password);
    $sql="INSERT INTO GEBRUIKER ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM],
    [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [TELEFOONNUMMER], [SEXE], [WACHTWOORD])
    VALUES('".addslashes($username)."', '".addslashes($firstname)."', '".addslashes($tussenvoegsel)."','".addslashes($lastname)."', '".addslashes($street)."', '".addslashes($huisnummer)."',
    '".addslashes($postcode)."', '".addslashes($woonplaats)."', '".addslashes($email)."', '".addslashes($phonenumber)."' , '".addslashes($sexe)."', '".$password."')";
    sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));

}

/**
 * Update de persoonsgegevens van de gebruiker
 ** @param $username gebruikersnaam
 * @param $firstname voornaam
 * @param $tussenvoegsel tussenvoegsel
 * @param $lastname achternaam
 * @param $street straat
 * @param $huisnummer huisernummer
 * @param $postcode postcode
 * @param $woonplaats woonplaats
 * @param $email email adres
 * @param $phonenumber telefoonnummer
 * @param $sexe geslacht
 */
function updateUser($username, $firstname, $tussenvoegsel, $lastname, $street,  $huisnummer, $postcode,
                    $woonplaats, $email, $phonenumber, $sexe)
{
    global $db;
    $sql = "UPDATE GEBRUIKER SET [VOORNAAM] = '" . addslashes($firstname) . "',
    [TUSSENVOEGSEL] = '" . addslashes($tussenvoegsel) . "', [ACHTERNAAM] = '" . addslashes($lastname) . "', [STRAATNAAM] = '" . addslashes($street) . "',
    [HUISNUMMER] = '" . addslashes($huisnummer) . "', [POSTCODE] = '" . addslashes($postcode) . "', [WOONPLAATS] = '" . addslashes($woonplaats) . "',
    [EMAIL] = '" . addslashes($email) . "', [TELEFOONNUMMER] = '" . addslashes($phonenumber) . "', [SEXE] = '" . addslashes($sexe) . "'
    WHERE [GEBRUIKERSNAAM] = '" . addslashes($username) . "')";
    sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));
}

function updateWachtwoord($password, $username)
{
    $password = hash('sha256', $password);
    global $db;
    $sql = "UPDATE GEBRUIKER SET [WACHTWOORD] = '" . addslashes($password) . "' WHERE [GEBRUIKERSNAAM] = '" . addslashes($username) . "')";
    sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));
}


/**
 *  Logt de gebruiker uit en vernietigd de sessie, gebruiker wordt verolgends naar ?nieuws gestuurd
 */
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

/**
 * Checkt of het telefoonnummer uit alleen maar cijfers bestaat
 * @param $phonenumber
 * @return bool
 */
function telefoonnummer_check($phonenumber) {
    if(is_numeric($phonenumber)) {
        return true;
    }
    return false;
}

/**
 * Checkt of er een geldige postcode is ingevoerd en zet de postcode in een standaard formaat: 1234 ab --> 1234AB
 * @param $zipcode
 * @return bool|string
 */
function postcode_check($zipcode) {
    $remove = str_replace(" ","", $zipcode);
    $upper = strtoupper($remove);

    if( preg_match("/^\W*[1-9]{1}[0-9]{3}\W*[a-zA-Z]{2}\W*$/",  $upper)) {
        return $upper;
    } else {
        return false;
    }
}

/**
 * Checkt of de gebruikersnaam langer dan 5 karakters is
 * @param $username
 * @return bool
 */
function username_length_check($username) {
    if(strlen($username) >= 5) {
        return true;
    }
    return false;
}

/**
 * Functie om een mail te versturen
 * @param $to email adres van de ontvanger
 * @param $title titel van het bericht
 * @param $message het bericht
 */
function sendMail($to, $title, $message){
    $headers = 'From: mailing@drankorgel.nl' . "\r\n" .
        'Reply-To: mailing@drankorgel.nl' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $title, $message, $headers);
}

?>