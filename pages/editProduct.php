<?php
include("classes/Product.class.php");
if(!empty($_GET['pid'])) {
    $product = new Product($_GET['pid']);

?>
<h1>Wijzig product: <?=$product->getProductNaam();?></h1>

<form name="addProduct" method="post" action="?editProduct-ac">
    Productnaam(orgineel): <input type="text" name="ProductnaamHuidge" placeholder="Productnaam" value="<?=$product->getProductNaam();?>"readonly><br /><br />
    Productnaam: * <br /> <input type="text" name="Productnaam" placeholder="Productnaam" value="<?=$product->getProductNaam();?>"><br /><br />
    Omschrijving: * <br /><textarea name="Omschrijving" rows="10" cols="75" placeholder="Omschrijving"><?=$product->getOmschrijving();?></textarea><br />
    Categorie: *
    <select name="Categorie" value="<?=$product->getCategorie();?>">
        <?php
        $query = "SELECT * FROM CATEGORIE";
        $result = sqlsrv_query($db->getConn(),$query, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
            echo "<option value='";
            echo $row['CATEGORIENAAM'];
            echo "' ";
            if($row['CATEGORIENAAM'] == $product->getCategorie()){
                echo " selected='selected' ";
            }

            echo " > ";
            echo $row['CATEGORIENAAM'];
            echo "</option>";
        }
        ?>
    </select>
    <br /><br />



    Prijs: * <br /> &euro; <input type="text" name="Prijs" placeholder="Prijs" value="<?=$product->getPrijs();?>"><br /><br />
    Voorraad: * <br /> <input type="text" name="Voorraad" placeholder="Voorraad" value="<?=$product->getPrijs();?>"> stuks<br /><br />
    Inhoud: * <br /> <input type="text" name="Inhoud" placeholder="Inhoud" value="<?=$product->getInhoud();?>"> cl<br /><br />
    Afbeelding(locatie): * <br /> <input type="text" name="Afbeelding" placeholder="Afbeelding" value="<?=$product->getImg();?>"><br /><br />
    <input type="submit" name="Opslaan" value="Opslaan"/> <br /><br />

    <?php
}else{
    echo "<h1>Product niet gevonden!</h1>";
}