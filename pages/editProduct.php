<?php
include("classes/Product.class.php");
if(!empty($_GET['pid'])) {
    $product = new Product($_GET['pid']);

?>
<h1>Wijzig <?=$product->getProductNaam();?></h1>

<form name="addProduct" method="post" action="?addProduct-ac">
    Productnaam: * <br /> <input type="text" name="Productnaam" placeholder="Productnaam" value="<?=$product->getProductNaam();?>"><br /><br />
    Omschrijving: * <br /><textarea name="Omschrijving" rows="5" cols="40" placeholder="Omschrijving"  ></textarea value="<?=$product->getOmschrijving();?>"><br />
    Categorie: *
    <input type="radio" name="Categorie"
        <?php if (isset($Categorie) && $Categorie=="Bier") echo "checked";?>
           value="Bier">Bier
    <input type="radio" name="Categorie"
        <?php if (isset($Categorie) && $Categorie=="Likeuren") echo "checked";?>
           value="Likeuren">Likeuren
    <input type="radio" name="Categorie"
        <?php if (isset($Categorie) && $Categorie=="Mixen") echo "checked";?>
           value="Mixen">Mixen
    <input type="radio" name="Categorie"
        <?php if (isset($Categorie) && $Categorie=="Rum") echo "checked";?>
           value="Rum">Rum
    <input type="radio" name="Categorie"
        <?php if (isset($Categorie) && $Categorie=="Wijn") echo "checked";?>
           value="Wijn">Wijn
    <input type="radio" name="Categorie"
        <?php if (isset($Categorie) && $Categorie=="Whisky") echo "checked";?>
           value="Whisky">Whisky
    <br /><br />



    Prijs: * <br /> &euro;<input type="text" name="Prijs" placeholder="Prijs" value="<?=$product->getPrijs();?>"><br /><br />
    Voorraad: * <br /> <input type="text" name="Voorraad" placeholder="Voorraad" value="<?=$product->getPrijs();?>">stuks<br /><br />
    Inhoud: * <br /> <input type="text" name="Inhoud" placeholder="Inhoud" value="<?=$product->getInhoud();?>">cl<br /><br />
    Afbeelding(locatie): * <br /> <input type="text" name="Afbeelding" placeholder="Afbeelding" value="<?=$product->getImg();?>"><br /><br />
    <input type="submit" name="Opslaan" value="Opslaan"/> <br /><br />

    <?php
}else{
    echo "<h1>Product niet gevonden!</h1>";
}