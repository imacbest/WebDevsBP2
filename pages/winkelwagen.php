<?php

if(isset($_GET['removeID'])){
    if(!empty($_GET['removeID'])){
        $cart->removeAllFromCart($_GET['removeID']);
        echo "Product is verwijderd uit je winkelwagentje!";
    }
}
if(isset($_GET['pAdd'])){
    if(!empty($_GET['pAdd'])){
        $cart->addToCart($_GET['pAdd'], 1);
    }
}
if(isset($_GET['pRemove'])){
    if(!empty($_GET['pRemove'])){
        $cart->removeAmountFromCart($_GET['pRemove'], 1);
        echo "Het te bestellen aantal is met 1 verlaagd (-1)";
    }
}


require("classes/Product.class.php");

?>
<h1>Winkelwagen</h1>


<?php
if($cart->isCartEmpty()){
    echo "Het winkelwagentje is nog leeg, je kunt op de <a href='?producten' title='producten'>producten pagina</a> onze producten vinden."; // geen items in winkelwagen
}else {
?>



    <table class="winkelwagen">
    <tr>
        <th>&nbsp;</th>
        <th>Productnaam</th>
        <th>Prijs</th>
        <th>Aantal</th>
        <th>Subtotaal</th>
        <th>Verwijderen</th>
    </tr>
    <?php
    if (array_key_exists('winkelwagen', $_SESSION)) {
        $items = count($_SESSION['winkelwagen']);
        if ($items > 0) {
            $totalPrice = 0;
            for ($i = 0; $i < $items; $i++) {
                if ($_SESSION['winkelwagen'][$i]['aantal'] != 0) {
                    $product = new Product($_SESSION['winkelwagen'][$i]['productID']);
                    ?>
                <tr>
                    <td><a href="?product&amp;pid=<?= $_SESSION['winkelwagen'][$i]['productID']; ?>" title="<?= $product->getProductNaam(); ?>"><img src="media/producten/<?= $product->getImg(); ?>" class="imgPreview" alt="Jack" height="250" /></a> </td>
                    <td><a href="?product&amp;pid=<?= $_SESSION['winkelwagen'][$i]['productID']; ?>" title="<?= $product->getProductNaam(); ?>"><?= $product->getProductNaam(); ?></a></td>
                    <td>&euro; <?= $product->getPrijs(); ?></td>
                    <td><?= $_SESSION['winkelwagen'][$i]['aantal']; ?>&nbsp;
                    <a href="?winkelwagen&amp;pAdd=<?= $_SESSION['winkelwagen'][$i]['productID']; ?>"> <img src="media/add.png" alt="+1" height="20" width="20" /> </a>
                      <a href="?winkelwagen&amp;pRemove=<?= $_SESSION['winkelwagen'][$i]['productID']; ?>"> <img src="media/delete.png" alt="-1" height="20" width="20" /> </a> </td>
                    <td>&euro; <?= $product->getPrijs() * $_SESSION['winkelwagen'][$i]['aantal']; ?> </td>
                    <td><a href="?winkelwagen&amp;removeID=<?= $_SESSION['winkelwagen'][$i]['productID']; ?>" title="Verwijder <?= $product->getProductNaam(); ?> uit je winkelwagentje">
                    <img src="media/remove.jpg" alt="-1" height="60" width="65" />
                    </a> </td>
                </tr>
                <?php
                    $totalPrice += $product->getPrijs() * $_SESSION['winkelwagen'][$i]['aantal'];
                }
            }
            ?>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Totaal prijs: &euro; <?=$totalPrice;?></td>
                <td><a href="?afrekenen" title="Afrekenen">Afrekenen</a></td>

            </tr>
        <?php
            echo "</table> ";

        } else {
            echo "Geen items gevonden";
        }
    } else {
        echo "Het winkelwagentje is nog leeg, je kunt op de <a href='?producten' title='producten'>producten pagina</a> onze producten vinden."; // geen items in winkelwagen
    }
}
?>