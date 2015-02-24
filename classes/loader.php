<?php
/**
 * @author Thomas
 * @project imacbest.nl
 * @date: 17-2-2015
 * @time: 01:37
 */
require("DB.class.php");
$db = new DB('(local)\sqlexpress', "WEBSHOP", "sa", "DbAp");

require("page.class.php");
$page = new Page();
?>