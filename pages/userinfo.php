<?php
$check = false;
if(!empty($_POST['username'])) {
    $check = true;
    deleteUser($_POST['username']);
    echo "Het account " .$_POST['username']." is succesvol verwijderd!
    Wij hopen u snel weer van dienst te kunnen zijn!
    <br ?> U wordt binnen 5 seconden doorgestuurd naar onze homepage.";
    session_destroy();
    header("Refresh:5;url=index.php");
} else if(!$check) {
    ?>



    <form name="gegevens" method="post" action="?userinfo-ac">
        <table class="tableBorder">
            <tr>
                <td class="tableBorder">Accountgegevens</td>
                <td class="tableBorder">Factuuradres</td>
            </tr>
            <tr>
                <td class="tableBorder">
                    Gebruiksersnaam* (niet te wijzigen) <br/>
                    <input type="text" name="username" placeholder="Gebruikersnaam"
                           value=<?= $user->getUsername(); ?> readonly></
                ><br/>
                </td>
                <td class="tableBorder">
                    <table>
                        <tr>
                            <td>Aanhef*</td>
                            <td>Voornaam*</td>
                            <td>Tussenv.</td>
                            <td>Achternaam*</td>
                        </tr>
                        <tr>
                            <td>
                                <select name="aanhef">
                                    <option value="Dhr." <?php if ($user->getSexe() == 'm') { ?>
                                        SELECTED
                                    <?php
                                    } ?>
                                        >Dhr.
                                    </option>
                                    <option value="Mvr."<?php if ($user->getSexe() == 'v') { ?>
                                        SELECTED
                                    <?php
                                    } ?>
                                        >Mvr.
                                    </option>
                                </select>
                            </td>
                            <td><input type="text" name="firstname" placeholder="Voornaam"
                                       value=<?= $user->getVoornaam(); ?>></td>
                            <td><input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel"
                                       value=<?= $user->getTussenvoegsel(); ?>></td>
                            <td><input type="text" name="lastname" placeholder="Achternaam"
                                       value=<?= $user->getAchternaam(); ?>></td>
                        </tr>
                        <tr>
                            <td colspan="4">Emailadres*</td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="email" placeholder="Email"
                                                   value=<?= $user->getEmail(); ?>></td>
                        </tr>
                        <tr>
                            <td colspan="2">Straatnaam*</td>
                            <td colspan="2">Huisnummer*</td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="street" placeholder="Straat"
                                                   value=<?= $user->getStraatnaam(); ?>></td>
                            <td colspan="2"><input type="text" name="houseNumber" placeholder="Huisnummer"
                                                   value=<?= $user->getHuisnummer(); ?>></td>
                        </tr>
                        <tr>
                            <td colspan="2">Postcode*</td>
                            <td colspan="2">Plaatsnaam*</td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="zipcode" placeholder="Postcode"
                                                   value=<?= $user->getPostcode(); ?>></td>
                            <td colspan="2"><input type="text" name="city" placeholder="Stad"
                                                   value=<?= $user->getWoonplaats(); ?>></td>
                        </tr>
                        <tr>
                            <td colspan="4">Telefoon*</td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="text" name="phonenumber" placeholder="Telefoonnummer"
                                                   value=<?= $user->getPhonenumber(); ?>></td>
                            <td><input type="submit" name="Opslaan" value="Opslaan"/></td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
    </form>
    <br/><br/>
    <form name="deleteAccount" method="post">
        <input type="submit" name="Verwijder account:" value="Verwijder account:"/>
        <input type="text" name="username" placeholder="username"
               value="<?= $user->getUsername(); ?>" readonly>


    </form>
<?php
}
?>