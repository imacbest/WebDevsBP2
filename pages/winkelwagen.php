<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 10:47
 */

require("classes/Product.class.php");
$cart->addToCart(1, 5);
$cart->addToCart(2, 5);
$cart->addToCart(10, 5);
?>
<h1>Winkelwagen</h1>


<?php

if(array_key_exists('winkelwagen', $_SESSION)) {
    $items = count($_SESSION['winkelwagen']);
    if ($items > 0) {
        for ($i = 0; $i < $items; $i++) {
            if ($_SESSION['winkelwagen'][$i]['aantal'] != 0) {
                $product = new Product($_SESSION['winkelwagen'][$i]['productID'], $db);
                echo "Product naam: " .$product->getProductNaam() . " Aantal: " . $_SESSION['winkelwagen'][$i]['aantal'];
                echo "<br />";
            }
        }

        }else{
            echo "Geen items gevonden";
        }
    } else {
        echo "Geen array gevonden "; // geen items in winkelwagen
}


echo "<br /><br />";
print_r($_SESSION);

?>