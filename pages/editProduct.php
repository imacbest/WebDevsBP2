<?php
include("classes/Product.class.php");
include("functies/productFuncties.php");
if(!empty($_GET['pid'])) {
    $product = new Product($_GET['pid']);

    ?>
    <h1>Wijzig product: <?= $product->getProductNaam(); ?></h1>


    <?php

    $countError = 0;
    $check = false;
    $msg = "";

    if (!empty($_POST['Productnaam'])) {

        if (empty($_POST['Productnaam'])) {
            $msg .= "Productnaam is niet ingevuld!<br />";
            $countError++;
        }
        if (empty($_POST['Omschrijving'])) {
            $msg .= "Omschrijving is niet ingevuld!<br />";
            $countError++;
        } else if (strlen($_POST['Omschrijving']) < 10) {
            $msg .= "Omschrijving moet langer zijn dan 10 karakters!<br />";
            $countError++;
        }
        if (empty($_POST['Categorie'])) {
            $msg .= "Catergorie is niet ingevuld!<br />";
            $countError++;
        }
        if (empty($_POST['Prijs'])) {
            $msg .= "Prijs is niet ingevuld!<br />";
            $countError++;
        } //else if(!prijs_check($_POST['Prijs'])) {
//$msg .= "De prijs mag alleen uit nummer bestaan!<br />";
//$countError++;
//}
        if (empty($_POST['Voorraad'])) {
            $msg .= "Voorraad is niet ingevuld!<br />";
            $countError++;
        }
        if (empty($_POST['Inhoud'])) {
            $msg .= "Inhoud is niet ingevuld!<br />";
            $countError++;
        }
        if (empty($_POST['Afbeelding'])) {
            $msg .= "Er is geen afbeelding opgegeven!<br />";
            $countError++;
        }
        echo $msg;

        if ($countError == 1) {
            echo "<br ?>Er is " . $countError . " fout gevonden!<br />";
            echo '<a href=?editProduct title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
        } else if ($countError != 0) {
            echo "<br ?>Er zijn in totaal " . $countError . " fouten gevonden!<br />";
            echo '<a href=?editProduct title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
        } else if ($countError == 0) {
            $check = true;
            echo "Het product is succesvol gewijzigd! ";
            echo '<a href=?adminProducts title="Terug naar de beheerpagina">Terug naar de beheerpagina</a>';
            updateProduct($_POST['ProductnaamHuidge'], $_POST['Productnaam'], $_POST['Omschrijving'], $_POST['Categorie'], $_POST['Prijs'],
                $_POST['Voorraad'], $_POST['Inhoud'], $_POST['Afbeelding']);
        }
        ?>
        <br/>
    <?php
    } if ($check == false) {
        ?>


        <form name="addProduct" method="post">
        Productnaam(orgineel): <input type="text" name="ProductnaamHuidge" placeholder="Productnaam"
                                      value="<?= $product->getProductNaam(); ?>" readonly><br/><br/>
        Productnaam: * <br/> <input type="text" name="Productnaam" placeholder="Productnaam"
                                    value="<?= $product->getProductNaam(); ?>"><br/><br/>
        Omschrijving: * <br/><textarea name="Omschrijving" rows="10" cols="75"
                                       placeholder="Omschrijving"><?= $product->getOmschrijving(); ?></textarea><br/>
        Categorie: *
        <select name="Categorie" value="<?= $product->getCategorie(); ?>">
            <?php
            $query = "SELECT * FROM CATEGORIE";
            $result = sqlsrv_query($db->getConn(), $query, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET));
            while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                echo "<option value='";
                echo $row['CATEGORIENAAM'];
                echo "' ";
                if ($row['CATEGORIENAAM'] == $product->getCategorie()) {
                    echo " selected='selected' ";
                }

                echo " > ";
                echo $row['CATEGORIENAAM'];
                echo "</option>";
            }
            ?>
        </select>
        <br/><br/>


        Prijs: * <br/> &euro; <input type="text" name="Prijs" placeholder="Prijs"
                                     value="<?= $product->getPrijs(); ?>"><br/><br/>
        Voorraad: * <br/> <input type="text" name="Voorraad" placeholder="Voorraad"
                                 value="<?= $product->getVoorraad(); ?>"> stuks<br/><br/>
        Inhoud: * <br/> <input type="text" name="Inhoud" placeholder="Inhoud" value="<?= $product->getInhoud(); ?>">
        cl<br/><br/>
        Afbeelding(locatie): * <br/> <input type="text" name="Afbeelding" placeholder="Afbeelding"
                                            value="<?= $product->getImg(); ?>"><br/><br/>

        <input type="submit" name="Opslaan" value="Opslaan"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" onclick="deleteProduct()">Product verwijderen</button><br/><br/><br/><br/>



    <?php
    }
}
?>