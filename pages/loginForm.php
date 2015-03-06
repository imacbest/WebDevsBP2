<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 6-3-2015
 * Time: 15:35
 */

?>
<?php
if(isset($_SESSION['uid'])){ // user is ingelogd

}else{ // user is niet ingelogd

}

function logout(){
    session_destroy();
}

//function checkLogin($username, $password){
//    $query = "SELECT * FORM GEBRUIKERS WHERE GEBRUIKERSNAAM = '".addslashes($username)."'
//        AND WACHTWOORD = '".addslashes($password)."'";
//    $result = sqlsrv_query($db->getConn(), $query, array(), array("Srollable" = > SQLSRV_CURSOR_KEYSET));
//    if(sqlsrv_num_rows($result) == 1){
//        echo "User found!";
//        $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
//        $_SESSION['uid'] = $row['userID'];
//    }else if (sqlsrv_num_rows($result) > 1){
//        echo "Meerdere gebruikers gevonden";
//    }else{
//        echo "Gebruiker is niet gevonden";
//    }
//}

function createUser($username, $password, $voornaam, $tussenvoegsel, $achternaam, $straatnaam, $postcode,
    $huisnummer, $woonplaats, $email, $sexe){

}
?>
<div id="login">
    <form>
        <h3>Log in</h3>
        <table>
            <tr>
                <td>Gebruikersnaam</td>
                <td>Wachtwoord</td>
            </tr>
            <tr>
                <td><input type="text" name="username" title="username" placeholder="Gebruikersnaam" /> </td>
                <td><input type="password" name="password" title="password" placeholder="Wachtwoord" /></td>
            </tr>
        </table>
        <input type="checkbox" name="remember" title="remember" /> Onthouden
        <a href="#" title="vergeten?" >vergeten?</a> <a href="../pages/registreren.html" title="Registreer">Registreer</a>
        <input type="button" title="log on" name="Log on" value="Log in" />
    </form>
</div>