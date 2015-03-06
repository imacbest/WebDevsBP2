<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 6-3-2015
 * Time: 16:45
 */
function checkLogin($username, $password, $db){
    $query = "SELECT * FORM GEBRUIKERS WHERE GEBRUIKERSNAAM = '".addslashes($username)."'
            AND WACHTWOORD = '".addslashes($password)."'";
    $result = sqlsrv_query($db->getConn(), $query, array(),
        array("Srollable" => SQLSRV_CURSOR_KEYSET));
    if(sqlsrv_num_rows($result) == 1){
        echo "User found!";
        $this->isGebruikerIngelogd = true;
        $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
        $_SESSION['uid'] = $row['userID'];
    }else if (sqlsrv_num_rows($result) > 1){
        echo "Meerdere gebruikers gevonden";
    }else{
        echo "Gebruiker is niet gevonden";
    }
}

function createUser($username, $password, $voornaam, $tussenvoegsel, $achternaam, $straatnaam, $postcode,
                    $huisnummer, $woonplaats, $email, $sexe){

}
?>