<?php
session_start();
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 9:48
 */
require("classes/loader.php");
?>

<!DOCTYPE html>
<!--
Made by: Thomas Kool & Max Groenendijk
Beroepsproduct 2
2015
-->
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Het Drankorgel</title>
    <!-- stylesheets -->
    <link type="text/css" rel="stylesheet" href="CSS/mainStyle3.css" />
    <link type="text/css" rel="stylesheet" href="CSS/menu.css" />
    <!-- end stylesheets -->
</head>
<body>
<div id="wrap">
    <!-- header -->
    <div id="header">
        <!-- logo -->
        <a href="?home" title="Home">
            <div id="logo">
            </div>
        </a>
        <!-- end logo -->
        <!-- login -->
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
        <!-- end login -->

    </div>
    <div class="clear">

    </div>

    <!-- start nav -->
    <div id="nav">
        <?php
        include("pages/menu.php");
        ?>
    </div>
    <!-- end nav -->
    <div id="content">
        <div id="pageContent">
            <?php
            include($page->getPage());
            ?>

        </div>
        <div id="ad">
            <img src="media/logo%20Het%20Drankorgel-site%20barV2.png" alt="Logo" />
        </div>
    </div>

</div>


</body>
</html>
<?php
// db connection close
$db->closeDBConnection();
?>
