<?php
if(checkIfUserIsAdmin()){
?>

<h1>Website beheer</h1>
Welkom <?=$user->getVoornaam()." ". $user->getTussenvoegsel() . " " .$user->getAchternaam();?><br /><br />
<a href="?sendMailing" title="Verstuur emails">Verstuur email bericht naar alle gebruikers</a>
    <br /><br />  <a href="?adminProducts" title="Beheer producten">Beheer producten</a>
    <br /><br />  <a href="?adminUsers" title="Beheer gebruikers">Beheer gebruikers</a>

   <?php
}else{
    echo "Error: er ging iets fout!";
}
?>