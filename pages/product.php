<?php
include("classes/Product.class.php");

if(!isset($_GET['pid'])){
    echo "<h1>Product niet gevonden!</h1>";
}else{
    if(!empty($_GET['pid'])){
        if(isset($_POST['aantal'])){
            if(!empty($_POST['aantal'])){
                if(is_numeric($_POST['aantal'])) {
                    $cart->addToCart($_GET['pid'], $_POST['aantal']);
                    echo "Product is toegevoegd aan je winkelwagentje!";
                }
            }
        }

        $product = new Product($_GET['pid'], $db);

        // product info

        ?>

        <h1><?=$product->getProductNaam();?></h1>
        <div class="imgLeft">
            <img src="media/producten/<?=$product->getImg();?>" alt="<?=$product->getProductNaam();?>" height="400" />
        </div>
        <div class="rightBlock">

            <b>&euro; <?=$product->getPrijs();?></b><br />
            Inhoud: <b><?=$product->getInhoud();?> cl</b>
            <p>
                <?=$product->getOmschrijving();?>
            </p>
            <br /><br />
            <p>
                <form method="post" action="?product&amp;pid=<?=$_GET['pid'];?>">
                Aantal <input type="number" name="aantal" min="0" value="1" /> <input type="submit" name="toevoegen" />
                </form>
            </p>

        </div>
        <?php


        // end product info
    }else{
        echo "<h1>Product niet gevonden!</h1>";
    }
}
?>