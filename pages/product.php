<?php
include("classes/Product.class.php");
if(isset($_GET['pAdd'])){
    if(!empty($_GET['pAdd'])){
        $cart->addToCart($_GET['pAdd'], 1);
        echo "Product is toegevoegd aan je winkelwagentje!";
    }
}
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

        $product = new Product($_GET['pid']);
        // product info

        ?>

        <h1><?=$product->getProductNaam();?></h1>
        <div class="imgLeft">
            <img src="media/producten/<?=$product->getImg();?>" alt="<?=$product->getProductNaam();?>" height="400" />
        </div>
        <div class="rightBlock">

            <b>&euro; <?=$product->getPrijs();?></b><br />
            Inhoud: <b><?=$product->getInhoud();?> cl</b><br />
            Voorraad: <b><?=$product->getVoorraad();?></b>
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
        <div class="clear"></div>
        <br />
        <h2>Suggesties</h2>
        <table class="productenTabel">
            <tr>
            <?php
            for($i = 0; $i < sizeof($product->getGerelateerdeProductenID()); $i++){
                $gerelateerdProduct = new Product($product->getGerelateerdeProductenID()[$i]);
                echo "<div class=\"product\">";
                echo "  <a href='?product&pid=".$gerelateerdProduct->getProductNummer()."' title='".$gerelateerdProduct->getProductNaam()."'>
                            <img height=\"150\" src='media/producten/".$gerelateerdProduct->getImg()."' alt=
                            '".$gerelateerdProduct->getProductNaam()."' /></a>
                        <br />".$gerelateerdProduct->getProductNaam()."<br />&euro;".$gerelateerdProduct->getPrijs()."<br />
                        <a href='?product&amp;pid=".$_GET['pid']."&pAdd=".$gerelateerdProduct->getProductNummer()."' title='Voeg ".$gerelateerdProduct->getProductNaam()." toe aan het winkelwagentje!'>In Winkelwagen</a>";
                echo "</div>&nbsp;";
                ?>




                <?php
            }
            ?>
            </tr>

        </table>
        <br /><br />


        <?php


        // end product info
    }else{
        echo "<h1>Product niet gevonden!</h1>";
    }
}
?>