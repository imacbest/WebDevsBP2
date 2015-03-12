<?php

?>
<h1>Voeg product toe</h1>

<?php

$countError = 0;
$msg = "";



if(empty($_POST['Productnaam'])) {
    $msg .= "Productnaam is niet ingevuld!<br />";
    $countError++;
} //else if(!productnaam_check($_POST['Productnaam'])) {
    //$msg .= "De productnaam bestaat al!<br />";
    //$countError++;
//}
if(empty($_POST['Omschrijving'])) {
    $msg .= "Omschrijving is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['Categorie'])) {
    $msg .= "Catergorie is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['Prijs'])) {
    $msg .= "Prijs is niet ingevuld!<br />";
    $countError++;
} //else if(!prijs_check($_POST['Prijs'])) {
    //$msg .= "De prijs mag alleen uit nummer bestaan!<br />";
    //$countError++;
//}
if(empty($_POST['Voorraad'])) {
    $msg .= "Voorraad is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['Inhoud'])) {
    $msg .= "Inhoud is niet ingevuld!<br />";
    $countError++;
}
if(empty($_POST['Afbeelding'])) {
    $msg .= "Er is geen afbeelding opgegeven!<br />";
    $countError++;
}






echo $msg;

if($countError == 1) {
    echo "<br ?>Er is ".$countError." fout gevonden!<br />";
    echo '<a href=?addProduct title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
}else if($countError != 0) {
    echo "<br ?>Er zijn in totaal " . $countError . " fouten gevonden!<br />";
    echo '<a href=?addProduct title="Terug naar de vorige pagina">Terug naar de vorige pagina</a>';
}else if($countError == 0) {
    echo "Het product is succesvol toegevoegd!";
    echo '<a href=?adminProducts title="Terug naar de beheerpagina">Terug naar de beheerpagina</a>';
    createProduct($_POST['Productnaam'], $_POST['Omschrijving'], $_POST['Categorie'], $_POST['Prijs'],
        $_POST['Voorraad'], $_POST['Inhoud'], $_POST['Afbeelding']);
}
?>