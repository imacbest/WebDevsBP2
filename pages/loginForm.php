<?php

?>
<?php
if(isset($_SESSION['uid'])){ // user is ingelogd
    ?>

    Welkom <?=$user->getVoornaam(). " " .$user->getAchternaam();?> <br />
    <a href="?nieuws&amp;logout=true;" title="Log uit">Log uit</a> <br /> <br />
    <a href="?userinfo" title="Bekijk/wijzig u persoonsgegevens">Bekijk/wijzig u persoonsgegevens</a> <br />
    <a href="?userinfoWachtwoord" title="Wijzig u wachtwoord">Wijzig u wachtwoord</a>
   <?php
    if(checkIfUserIsAdmin()) {
        ?>
        <br /><br />  <a href="?adminProducts" title="Beheer producten">Beheer producten</a>
        <br />  <a href="?adminUsers" title="Beheer gebruikers">Beheer gebruikers</a>
    <?php
    }
?>
    <?php
}else{ // user is niet ingelogd
    if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])){
        checkLogin($_POST['gebruikersnaam'], $_POST['wachtwoord'], $db);
    }else{



?>
    <form method="post">
        <h3>Log in</h3>
        <table>
            <tr>
                <td>Gebruikersnaam</td>
                <td>Wachtwoord</td>
            </tr>
            <tr>
                <td><input type="text" name="gebruikersnaam" title="username" placeholder="Gebruikersnaam" /> </td>
                <td><input type="password" name="wachtwoord" title="password" placeholder="Wachtwoord" /></td>
            </tr>
        </table>
        <input type="checkbox" name="remember" title="remember" /> Onthouden
        <a href="#" title="vergeten?" >vergeten?</a> <a href="?registreren" title="Registreer">Registreer</a>
        <input type="submit" title="log on" name="Log on" value="Log in" />
    </form>


<?php
    }
}
?>