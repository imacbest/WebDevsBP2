<?php

$countError = 0;
$msg = "";

$passwordOud = hash('sha256', $_POST['passwordOud']);

if(empty($passwordOud)) {
    $msg .= "Het huidige wachtwoord is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['passwordNew'])) {
    $msg .= "Het nieuwe wachtwoord is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['passwordNew2'])) {
    $msg .= "Het nieuwe herhaalde wachtwoord is niet ingevuld!<br />";
    $countError++;
}
// Checkt of het ingevoerde wachtwoord en herhaalde wachtwoord hetzelfde is

else if($_POST['passwordNew'] != $_POST['passwordNew2']) {
    $msg .= "Het nieuwe wachtwoord en het niuewe herhaalde wachtwoord corresponderen niet!<br />";
    $countError++;
}
if($passwordOud != $user->getWachtwoord()) {
    $msg .= "Het huidge wachtwoord is niet correct ingevuld!<br />";
    $countError++;
}

echo $msg;

if($countError == 1) {
    echo "<br ?>Er is ".$countError." fout gevonden!<br />";
    echo '<a href=?userinfoWachtwoord title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
}else if($countError != 0) {
    echo "<br ?>Er zijn in totaal " . $countError . " fouten gevonden!<br />";
    echo '<a href=?userinfoWachtwoord title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
}else if($countError == 0) {
    echo "U wachtwoord is succesvol gewijzigd!";
    echo '<a href=?nieuws title="Terug naar de beginpagina">Terug naar de beginpagina</a>';
    updateWachtwoord($_POST['passwordNew'], $_POST['username']);
}

?>
