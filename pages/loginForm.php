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
    ?>

    Welkom <?=$user->getVoornaam(). " " .$user->getAchternaam();?>
    <a href="?nieuws&amp;logout=true;" title="Log uit">Log uit</a>
    <?php
}else{ // user is niet ingelogd
    if(isset($_POST['username']) && isset($_POST['password'])){
        checkLogin($_POST['username'], $_POST['password'], $db);
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
                <td><input type="text" name="username" title="username" placeholder="Gebruikersnaam" /> </td>
                <td><input type="password" name="password" title="password" placeholder="Wachtwoord" /></td>
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

