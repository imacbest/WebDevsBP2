<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 6-3-2015
 * Time: 16:45
 */
function checkLogin($username, $password, $db){
    $query = "SELECT * FROM GEBRUIKER WHERE GEBRUIKERSNAAM like '".addslashes($username)."'
     AND WACHTWOORD like '".addslashes($password)."'";
    $result = sqlsrv_query($db->getConn(),$query, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
    if(sqlsrv_num_rows($result) ){
        echo "User found!";
        $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
        $_SESSION['uid'] = $row['userID'];
    }else{
        echo "Gebruiker is niet gevonden";
    }
}

function createUser($username, $password, $voornaam, $tussenvoegsel, $achternaam, $straatnaam, $postcode,
                    $huisnummer, $woonplaats, $email, $sexe){

}
function logout(){
    session_destroy();
}

?>