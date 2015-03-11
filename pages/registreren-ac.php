<?php

$countError = 0;
$check = false;

$countError = 0;
$msg = "";



if(empty($_POST['username'])) {
    $msg .= "Gebruikersnaam is niet ingevuld!<br />";
    $countError++;
}else if(gebruikersnaam_check($_POST['username'])) {
    $msg .= "De gekozen gebruikersnaam is al in gebruik!<br />";
    $countError++;
}else if(!username_length_check($_POST['username'])) {
    $msg .= "Het gebruikersnaam moet langer zijn dan 5 karakters!<br />";
    $countError++;
}
if(empty($_POST['password'])) {
    $msg .= "Het wachtwoord is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['password2'])) {
    $msg .= "Het herhaalde wachtwoord is niet ingevuld!<br />";
    $countError++;
}
// Checkt of het ingevoerde wachtwoord en herhaalde wachtwoord hetzelfde is

else if($_POST['password'] != $_POST['password2']) {
    $msg .= "Het wachtwoord en het herhaalde wachtwoord corresponderen niet!<br />";
    $countError++;
}
if(empty($_POST['aanhef'])) {
    $msg .= "Aanhef is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['firstname'])) {
    $msg .= "De voornaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['lastname'])) {
    $msg .= "De achternaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['email'])) {
    $msg .= "Het e-mailadres is niet ingevuld!<br />";
    $countError++;
}else if(!email_validator($_POST['email'])) {
    $msg .= "Er is geen geldig emailadres ingevuld!<br />";
    $countError++;
}else if(email_check($_POST['email'])) {
    $msg .= "Er is al een account aangemaakt met het gekozen emailadres!<br />";
    $countError++;
}
if(empty($_POST['street'])) {
    $msg .= "De straatnaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['houseNumber'])) {
    $msg .= "Het huisnummer is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['zipcode'])) {
    $msg .= "De postcode is niet ingevuld!<br />";
    $countError++;
} else if (!postcode_check($_POST['zipcode'])) {
    $msg .= "De postcode moet er als volgt uitzien: 1234AB!<br />";
    $countError++;
} else {
    $_POST['zipcode'] = postcode_check($_POST['zipcode']);
}
if(empty($_POST['city'])) {
    $msg .= "De plaatsnaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['phonenumber'])) {
    $msg .= "Het telefoonnummer is niet ingevuld!<br />";
    $countError++;
} else if (!telefoonnummer_check($_POST['phonenumber'])) {
    $msg .= "Het telefoonnummer mag alleen uit nummers bestaan!<br />";
    $countError++;
}

//Geeft het geslacht aan in de database: m of v
if($_POST['aanhef'] == "Dhr.") {
    $aanhef = "m";
}else if($_POST['aanhef'] == "Mvr.") {
    $aanhef = "v";
}

echo $msg;

if($countError == 1) {
    echo "<br ?>Er is ".$countError." fout gevonden!<br />";
    echo '<a href=?registreren title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
}else if($countError != 0) {
    echo "<br ?>Er zijn in totaal " . $countError . " fouten gevonden!<br />";
    echo '<a href=?registreren title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
}else if($countError == 0) {
    echo "U bent succesvol geregistreerd! Bevestig u registratie via de link in u e-mail.";
    echo '<a href=?nieuws title="Terug naar de beginpagina">Terug naar de beginpagina</a>';
    createUser($_POST['username'], $_POST['firstname'], $_POST['tussenvoegsel'], $_POST['lastname'],
        $_POST['street'], $_POST['houseNumber'], $_POST['zipcode'], $_POST['city'], $_POST['email'],
        $aanhef, $_POST['password'], $db);
}

?>
