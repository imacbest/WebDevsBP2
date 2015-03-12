<?php

?>

<form name="gegevens" method="post" action="?userinfo-pw">
    <table class="tableBorder">
        <tr>
            <td class="tableBorder">Accountgegevens</td>
        </tr>
        <tr>
            <td class="tableBorder">
                Gebruiksersnaam* (niet te wijzigen) <br />
                <input type="text" name="username" placeholder="Gebruikersnaam" value=<?=$user->getUsername();?> readonly></><br />
                Huidige wachtwoord* <br />
                <input type="password" name="passwordOud" placeholder="Huidige wachtwoord" /> <br />
                Nieuw wachtwoord* <br />
                <input type="password" name="passwordNew" placeholder="Nieuw wachtwoord" /> <br />
                Herhaal nieuw wachtwoord* <br />
                <input type="password" name="passwordNew2" placeholder="Herhaal nieuw wachtwoord" /><br />
                <input type="submit" name="Opslaan" value="Opslaan"/>
            </td>
        </tr>
    </table>
</form>