<?php
include("functies/productFuncties.php");
?>
<h1>Voeg product toe</h1>

<form name="addProduct" method="post" action="?addProduct-ac">
Productnaam: * <br /> <input type="text" name="Productnaam" placeholder="Productnaam"><br /><br />
Omschrijving: * <br /><textarea name="Omschrijving" rows="5" cols="40" placeholder="Omschrijving" ></textarea><br />
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



Prijs: * <br /> &euro;<input type="text" name="Prijs" placeholder="Prijs"><br /><br />
Voorraad: * <br /> <input type="text" name="Voorraad" placeholder="Voorraad">stuks<br /><br />
Inhoud: * <br /> <input type="text" name="Inhoud" placeholder="Inhoud">cl<br /><br />
Afbeelding(locatie): * <br /> <input type="text" name="Afbeelding" placeholder="Afbeelding"><br /><br />
<input type="submit" name="Opslaan" value="Opslaan"/> <br /><br />