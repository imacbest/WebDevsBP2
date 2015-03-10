<?php




$countError = 0;
$msg = "";

if(empty($_POST['username'])) {
    echo "Gebruikersnaam is niet ingevuld!";
    $countError++;
}

if(empty($_POST['username'])) {
    echo "Gebruikersnaam is niet ingevuld!";
    $countError++;
}
if(empty($_POST['password'])) {
    echo "Wachtwoord is niet ingevuld!";
    $countError++;
}
if(empty($_POST['password2'])) {
    echo "Herhaal wachtwoord is niet ingevuld!";
    $countError++;
}
if($_POST['password'] == $_POST['password2']) {
}
else {
    echo "Het wachtwoord en het herhaalde wachtwoord corresponderen niet!";
    $countError++;
}
if(empty($_POST['aanhef'])) {
    echo "Aanhef is niet ingevuld!";
    $countError++;
}
if(empty($_POST['firstname'])) {
    echo "De voornaam is niet ingevuld!";
    $countError++;
}
if(empty($_POST['lastname'])) {
    echo "De achternaam is niet ingevuld!";
    $countError++;
}
if(empty($_POST['email'])) {
    echo "Het e-mailadres is niet ingevuld!";
    $countError++;
}
if(empty($_POST['street'])) {
    echo "De straatnaam is niet ingevuld!";
    $countError++;
}
if(empty($_POST['houseNumber'])) {
    echo "Het huisnummer is niet ingevuld!";
    $countError++;
}
if(empty($_POST['zipcode'])) {
    echo "De postcode is niet ingevuld!";
    $countError++;
}
if(empty($_POST['city'])) {
    echo "De plaatsnaam is niet ingevuld!";
    $countError++;
}
if(empty($_POST['phonenumber'])) {
    echo "Het telefoonnummer is niet ingevuld!";
    $countError++;
}
if($countError >= 1) {
    "Er is/zijn $counterError fouten gevonden!";
}





?>