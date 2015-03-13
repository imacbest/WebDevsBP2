<?php
include("functies/productFuncties.php");
?>
<h1>Voeg product toe</h1>

<form name="addProduct" method="post" action="?addProduct-ac">
    Productnaam: * <br /> <input type="text" name="Productnaam" placeholder="Productnaam"><br /><br />
    Omschrijving: * <br /><textarea name="Omschrijving" rows="8" cols="75" placeholder="Omschrijving" ></textarea><br />
    Categorie: *
    <select name="Categorie">
        <?php
        $query = "SELECT * FROM CATEGORIE";
        $result = sqlsrv_query($db->getConn(),$query, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
            echo "<option value='".$row['CATEGORIENAAM']."'>".$row['CATEGORIENAAM']."</option>";
        }
        ?>
    </select>
    <br /><br />



    Prijs: * <br /> &euro;<input type="text" name="Prijs" placeholder="Prijs (9.99)"><br /><br />
    Voorraad: * <br /> <input type="text" name="Voorraad" placeholder="Voorraad (25)">stuks<br /><br />
    Inhoud: * <br /> <input type="text" name="Inhoud" placeholder="Inhoud (125)">cl<br /><br />
    Afbeelding(locatie): * <br /> <input type="text" name="Afbeelding" placeholder="Afbeelding (fles.png)"><br /><br />
    <input type="submit" name="Opslaan" value="Opslaan"/> <br /><br /><br /><br />
    </form>