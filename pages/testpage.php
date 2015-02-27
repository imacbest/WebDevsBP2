<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 27-2-2015
 * Time: 13:43
 */

include("../classes/DB.class.php");
$db = new DB('(local)\sqlexpress', "WEBSHOP", "sa", "DbAp");

include("../classes/Product.class.php");
$product = new Product(10, $db);

echo $product->getProductNaam();

?>