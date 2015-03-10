<?php
$host="localhost"; // Host name
$username="sa"; // Mysql username
$password="DbAp"; // Mysql password
$db_name="WEBSHOP"; // Database name
$tbl_name="GEBRUIKER";


$countError = 0;
$check = false;

$username = $_POST['username'];
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
$check = false;


if(empty($_POST['username'])) {
    echo "Gebruikersnaam is niet ingevuld!<br />";
    $countError++;
   }
if(empty($_POST['password'])) {
    echo "Wachtwoord is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['password2'])) {
    echo "Herhaal wachtwoord is niet ingevuld!<br />";
    $countError++;
}
if($_POST['password'] != $_POST['password2']) {
    echo "Het wachtwoord en het herhaalde wachtwoord corresponderen niet!<br />";
    $countError++;
}
if(empty($_POST['aanhef'])) {
    echo "Aanhef is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['firstname'])) {
    echo "De voornaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['lastname'])) {
    echo "De achternaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['email'])) {
    echo "Het e-mailadres is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['street'])) {
    echo "De straatnaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['houseNumber'])) {
    echo "Het huisnummer is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['zipcode'])) {
    echo "De postcode is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['city'])) {
    echo "De plaatsnaam is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['phonenumber'])) {
    echo "Het telefoonnummer is niet ingevuld!<br />";
    $countError++;
}
if($countError == 1) {
    echo "<br ?>Er is ".$countError." fout gevonden!<br />";
    echo '<a href=?registreren title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
}
if($countError != 0) {
    echo "<br ?>Er zijn in totaal " . $countError . " fouten gevonden!<br />";
    echo '<a href=?registreren title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
}
if($countError == 0) {
    echo "U bent succesvol geregistreerd! Bevestig u registratie via de link in u e-mail.";
    echo '<a href=?nieuws title="Terug naar de beginpagina">Terug naar de beginpagina</a>';
    $check = true;
}
if($aanhef == "Dhr.") {
    $aanhef = "m";
    echo $aanhef;
}
if($aanhef == "Mvr.") {
    $aanhef = "v";
}

if($check == true) {
    mysql_connect("$host", "$username", "$password")or die("cannot connect");
    mysql_select_db("$db_name")or die("cannot select DB");
    $sql="INSERT INTO $tbl_name([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM],
    [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD])
    VALUES('$username', '$firstname', '$tussenvoegsel','$lastname', '$street', '$houseNumber',
    '$zipcode', '$city', '$email', '$aanhef', '$password')";
    $result=mysql_query($sql);
    mysql_close();
}


?>
