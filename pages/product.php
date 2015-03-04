<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 4-3-2015
 * Time: 9:49
 */
include("classes/Product.class.php");

if(!isset($_GET['pid'])){
    echo "<h1>Product niet gevonden!</h1>";
}else{
    if(!empty($_GET['pid'])){
        $product = new Product($_GET['pid'], $db);

        // product info

        ?>

        <h1><?=$product->getProductNaam();?></h1>
        <div class="imgLeft">
            <img src="media/producten/<?=$product->getImg();?>" alt="<?=$product->getProductNaam();?>" height="400" />
        </div>
        <div class="rightBlock">

            <h2><?=$product->getProductNaam();?></h2>
            <b>&euro; <?=$product->getPrijs();?></b><br />
            Inhoud: <b><?=$product->getInhoud();?> cl</b>
            <p>
                <?=$product->getOmschrijving();?>
            </p>
            <br /><br />
            <p>
                Aantal <input type="number" name="aantal" min="0" value="1" /> <input type="submit" name="toevoegen" value="Toevoegen aan winkelwagen" />
            </p>

        </div>
        <?php


        // end product info
    }else{
        echo "<h1>Product niet gevonden!</h1>";
    }
}
?>