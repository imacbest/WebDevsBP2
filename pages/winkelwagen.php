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
//print_r($_SESSION);
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
?>

