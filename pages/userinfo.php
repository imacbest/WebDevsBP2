<?php

?>
<form name="gegevens" method="post" action="?userinfo-ac">
    <table class="tableBorder">
        <tr>
            <td class="tableBorder">Accountgegevens</td>
            <td class="tableBorder">Factuuradres</td>
        </tr>
        <tr>
            <td class="tableBorder">
                Gebruiksersnaam* (niet te wijzigen) <br />
                <input type="text" name="username" placeholder="Gebruikersnaam" value=<?=$user->getUsername();?> readonly></><br />
            </td>
            <td class="tableBorder">
                <table>
                    <tr>
                        <td>Aanhef* </td>
                        <td>Voornaam* </td>
                        <td>Tussenv. </td>
                        <td>Achternaam* </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="aanhef">
                                <option value="Dhr.">Dhr.</option>
                                <option value="Mvr.">Mvr.</option>
                            </select>
                        </td>
                        <td><input type="text" name="firstname" placeholder="Voornaam" value=<?=$user->getVoornaam();?>> </td>
                        <td><input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel" value=<?=$user->getTussenvoegsel();?>> </td>
                        <td><input type="text" name="lastname" placeholder="Achternaam" value=<?=$user->getAchternaam();?>> </td>
                    </tr>
                    <tr>
                        <td colspan="4" >Emailadres* </td>
                    </tr>
                    <tr>
                        <td colspan="4" ><input type="text" name="email" placeholder="Email" value=<?=$user->getEmail();?>> </td>
                    </tr>
                    <tr>
                        <td colspan="2">Straatnaam* </td>
                        <td colspan="2">Huisnummer* </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="street" placeholder="Straat" value=<?=$user->getStraatnaam();?>> </td>
                        <td colspan="2"><input type="text" name="houseNumber" placeholder="Huisnummer" value=<?=$user->getHuisnummer();?>> </td>
                    </tr>
                    <tr>
                        <td colspan="2">Postcode* </td>
                        <td colspan="2">Plaatsnaam* </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="zipcode" placeholder="Postcode" value=<?=$user->getPostcode();?>> </td>
                        <td colspan="2"><input type="text" name="city" placeholder="Stad" value=<?=$user->getWoonplaats();?>> </td>
                    </tr>
                    <tr>
                        <td colspan="4">Telefoon*</td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" name="phonenumber" placeholder="Telefoonnummer" value=<?=$user->getPhonenumber();?>> </td>
                        <td><input type="submit" name="Opslaan" value="Opslaan"/> </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</form>
