<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 10:47
 */
?>
<h1>Winkelwagen</h1>


<?php

$_SESSION['winkelwagen'][0]['productID'] = 55;
$_SESSION['winkelwagen'][0]['aantal'] = 5;
$_SESSION['winkelwagen'][1]['productID'] = 2;
$_SESSION['winkelwagen'][1]['aantal'] = 3;
addToCart(33, 5);
addToCart(43, 5);
print_r($_SESSION);
echo "<br />";

if(array_key_exists('winkelwagen', $_SESSION)){
    $items = count($_SESSION['winkelwagen']);
    if($items > 0){
        for($i = 0; $i < $items; $i++){
            echo "Product id: " . $_SESSION['winkelwagen'][$i]['productID'] . " Aantal: " . $_SESSION['winkelwagen'][$i]['aantal'];
            echo "<br />";
        }

    }else{
        echo "Geen items gevonden";
    }
}else{
    echo "Geen array gevonden "; // geen items in winkelwagen
}

echo checkIfProductInCart(55);

function addToCart($productID, $amount){
    if(checkIfProductInCart($productID) != false){
        $_SESSION['winkelwagen'][checkIfProductInCart($productID)]['aantal']  += $amount;
    }else{
        $inserPoint = max(array_keys($_SESSION['winkelwagen'])) +1;
        $_SESSION['winkelwagen'][$inserPoint]['aantal'] = $amount;
        $_SESSION['winkelwagen'][$inserPoint]['productID'] = $productID;
    }
}

function checkIfProductInCart($productID){
    for($i = 0; $i < count($_SESSION['winkelwagen']); $i++){
        if($_SESSION['winkelwagen'][$i]['productID'] == $productID){
            return $i;
        }
    }
    return false;
}

?>