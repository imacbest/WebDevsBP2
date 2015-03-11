<?php

include("../classes/DB.class.php");
$db = new DB('(local)\sqlexpress', "WEBSHOP", "sa", "DbAp");

include("../classes/Product.class.php");
$product = new Product(10, $db);

echo "Product: " .$product->getProductNaam();
echo "<br />";
echo "Beschrijving: " .$product->getOmschrijving();

?>