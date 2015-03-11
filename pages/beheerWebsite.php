<?php
if(checkIfUserIsAdmin()){
?>

<h1>Website beheer</h1>
Welkom <?=$user->getVoornaam()." ".$user->getAchternaam();?><br />
<a href="?sendMailing" title="Verstuur emails">Verstuur email bericht naar alle gebruikers</a>

   <?php
}else{
    echo "Error: er ging iets fout!";
}
?>