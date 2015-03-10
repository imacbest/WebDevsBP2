<?php

?>
<h1>Registreren</h1>
<form name="registreren" method="post" action="?registreren-ac">
    <table class="tableBorder">
        <tr>
            <td class="tableBorder">Accountgegevens</td>
            <td class="tableBorder">Factuuradres</td>
        </tr>
        <tr>
            <td class="tableBorder">
                Gebruiksersnaam* <br />
                <input type="text" name="username" placeholder="Gebruikersnaam" /> <br />
                Wachtwoord* <br />
                <input type="password" name="password" placeholder="Wachtwoord" /> <br />
                Herhaal wachtwoord* <br />
                <input type="password" name="password2" placeholder="Herhaal wachtwoord" />
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
                        <td><input type="text" name="firstname" placeholder="Voornaam" /> </td>
                        <td><input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel" /> </td>
                        <td><input type="text" name="lastname" placeholder="Achternaam" /> </td>
                    </tr>
                    <tr>
                        <td colspan="4" >Emailadres* </td>
                    </tr>
                    <tr>
                        <td colspan="4" ><input type="text" name="email" placeholder="Email" /> </td>
                    </tr>
                    <tr>
                        <td colspan="2">Straatnaam* </td>
                        <td colspan="2">Huisnummer* </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="street" placeholder="Straat" /> </td>
                        <td colspan="2"><input type="text" name="houseNumber" placeholder="Huisnummer" /> </td>
                    </tr>
                    <tr>
                        <td colspan="2">Postcode* </td>
                        <td colspan="2">Plaatsnaam* </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="zipcode" placeholder="Postcode" /> </td>
                        <td colspan="2"><input type="text" name="city" placeholder="Stad" /> </td>
                    </tr>
                    <tr>
                        <td colspan="4">Telefoon*</td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" name="phonenumber" placeholder="Telefoonnummer" /> </td>
                        <td><input type="submit" name="Opslaan" value="Opslaan"/> </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</form>