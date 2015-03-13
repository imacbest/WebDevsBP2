<?php

?>
<h1>Voeg product toe</h1>

<form name="addProduct" method="post" action="?addProduct-ac">
Productnaam: * <br /> <input type="text" name="Productnaam" placeholder="Productnaam"><br /><br />
Omschrijving: * <br /><textarea name="Omschrijving" rows="5" cols="40" placeholder="Omschrijving" ></textarea><br />
Categorie: *
    <select name="Categorie">
        <option value="Bier">Bier</option>
        <option value="Likeuren">Likeuren</option>
        <option value="Mixen">Mixen</option>
        <option value="Rum">Rum</option>
        <option value="Wijn">Wijn</option>
        <option value="Whisky">Whisky</option></select>
<br /><br />



Prijs: * <br /> &euro;<input type="text" name="Prijs" placeholder="Prijs"><br /><br />
Voorraad: * <br /> <input type="text" name="Voorraad" placeholder="Voorraad">stuks<br /><br />
Inhoud: * <br /> <input type="text" name="Inhoud" placeholder="Inhoud">cl<br /><br />
Afbeelding(locatie): * <br /> <input type="text" name="Afbeelding" placeholder="Afbeelding"><br /><br />
<input type="submit" name="Opslaan" value="Opslaan"/> <br /><br />