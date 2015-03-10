<?php

$countError = 0;
$check = false;


$password = $_POST['password'];
$aanhef = $_POST['aanhef'];
$firstname = $_POST['firstname'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$street = $_POST['street'];
$houseNumber = $_POST['houseNumber'];
$zipcode = $_POST['zipcode'];
$city = $_POST['city'];
$phonenumber = $_POST['phonenumber'];

$countError = 0;
$msg = "";



if(empty($_POST['username'])) {
    $msg .= "Gebruikersnaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['password'])) {
    $msg .= "Wachtwoord is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['password2'])) {
    $msg .= "Herhaal wachtwoord is niet ingevuld!<br />";
    $countError++;
}
if($_POST['password'] != $_POST['password2']) {
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
}
if(empty($_POST['city'])) {
    $msg .= "De plaatsnaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['phonenumber'])) {
    $msg .= "Het telefoonnummer is niet ingevuld!<br />";
    $countError++;
}

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
        $aanhef, $_POST['password']);
}



?>
