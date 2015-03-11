<?php
require("DB.class.php");

$db = new DB('(local)\sqlexpress', "WEBSHOP", "sa", "DbAp");

require("functies/userFuncties.php");

require("User.class.php");

if(isset($_SESSION['uid'])){
    if(!empty($_SESSION['uid'])){
        if(is_numeric($_SESSION['uid'])){
           $user = new User($_SESSION['uid']);
        }else{
            echo "User id is not a number";
        }
    }else{
        echo "User id is empty";
    }
}

require("page.class.php");
$page = new Page();

require("Winkelwagen.class.php");
$cart = new Winkelwagen();
?>