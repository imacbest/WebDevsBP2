<?php
session_start();
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 9:48
 */
$_SESSION['uid'] = 9;
require("classes/loader.php");

echo $user->getUsername();
?>

<!DOCTYPE html>
<!--
Made by: Thomas Kool & Max Groenendijk
Beroepsproduct 2
2015
-->
<html>
<head lang="en">
    <meta charset="ISO-8859-1">
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
        <a href="?nieuws" title="Home">
            <div id="logo">
            </div>
        </a>
        <!-- end logo -->
        <!-- login -->
        <?php
        include("pages/loginForm.php");
        ?>
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
