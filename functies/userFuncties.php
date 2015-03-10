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
                   $woonplaats, $email, $sexe, $password){
    $password = hash('sha256', $password);
    $sql="INSERT INTO " ."GEBRUIKER". "([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM],
    [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD])
    VALUES('".addslashes($username)."', '".addslashes($firstname)."', '".addslashes($tussenvoegsel)."','".addslashes($lastname)."', '".addslashes($street)."', '".addslashes($huisnummer)."',
    '".addslashes($postcode)."', '".addslashes($woonplaats)."', '".addslashes($email)."', '".addslashes($sexe)."', '".addslashes($password)."')";
    sqlsrv_query($db->getConn(), $sql, NULL) or die (print_r(sqlsrv_errors()));

}
function logout(){
    session_destroy();
    header("Location: ?nieuws");
}

?>