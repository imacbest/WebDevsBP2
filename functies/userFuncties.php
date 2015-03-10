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

function createUser($username, $password, $voornaam, $tussenvoegsel, $achternaam, $straatnaam, $postcode,
                    $huisnummer, $woonplaats, $email, $sexe){
    $sql="INSERT INTO " .$tbl_name . "([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM],
    [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD])
    VALUES('".addslashes($username)."', '$firstname', '$tussenvoegsel','$lastname', '$street', '$houseNumber',
    '$zipcode', '$city', '$email', '$aanhef', '$password')";
}
function logout(){
    session_destroy();
    header("Location: ?nieuws");
}

?>