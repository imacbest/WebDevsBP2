<?php
require("classes/Product.class.php");
require("functies/productFuncties.php");
?>
<h1>Afrekenen</h1>
<?php
if (array_key_exists('winkelwagen', $_SESSION)) {
    $items = count($_SESSION['winkelwagen']);
    if ($items > 0) {
        echo "Producten zijn van de voorraad afgehaald!<br />";
        $totalPrice = 0;
        for ($i = 0; $i < $items; $i++) {
            if ($_SESSION['winkelwagen'][$i]['aantal'] != 0) {
                $product = new Product($_SESSION['winkelwagen'][$i]['productID']);
                $totalPrice += $product->getPrijs() * $_SESSION['winkelwagen'][$i]['aantal'];
                removeProductVoorraad($_SESSION['winkelwagen'][$i]['productID'], $_SESSION['winkelwagen'][$i]['aantal']);
            }
        }

    }
}
?>