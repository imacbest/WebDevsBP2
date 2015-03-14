<?php
//$check = false;

if(!empty($_POST['admin'])) {
    //$check = true;
    updateRechten($_POST['admin'], 2);
    echo "Het account " .$_POST['admin']." is succesvol administrator geworden! <br />";
}
if(!empty($_POST['user'])) {
    //$check = true;
    updateRechten($_POST['user'], 1);
    echo "Het account " .$_POST['user']." is succesvol gebruiker geworden!<br />";
}
if(!empty($_POST['username'])) {
    //$check = true;
    deleteUser($_POST['username']);
    echo "Het account " .$_POST['username']." is succesvol verwijderd!";
}
?>


<div id="gebruiksers">
<?php


$tsql = "SELECT * FROM GEBRUIKER ";
$result = sqlsrv_query( $db->getConn(), $tsql) or die( print_r( sqlsrv_errors() )  );

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
    echo "<div class=\"gebruiker\">";
    $rechten = $row['RECHTEN'];
    echo "<br />";
    if($rechten == 2) {
        echo "<b>Admin</b>";
    }
    echo "  <a href='?product&amp;pid=".$row['userID']."' title='".$row['GEBRUIKERSNAAM']."'></a>
                        <br />Naam: ".$row['VOORNAAM']." ".$row['TUSSENVOEGSEL']." ".$row['ACHTERNAAM'].
                        "<br />Gebruiksernaam: ".$row['GEBRUIKERSNAAM']."<br />Email: ".$row['EMAIL']."<br /><br />"?>
        <form name="deleteAccount" method="post">
        <input type="submit" name="Verwijder account" value="Verwijder account"/>
        <input type="text" name="username" placeholder="username"
               value="<?=$row['GEBRUIKERSNAAM'];?>" readonly hidden="">
        </form>
    <?php
            if($rechten == 1) { ?>
            <form name="makeAdmin" method="post">
                <input type="submit" name="Maak administrator" value="Maak administrator"/>
                <input type="text" name="admin" placeholder="username"
                       value="<?=$row['GEBRUIKERSNAAM'];?>" readonly hidden="">
                <?php
                }


                if($rechten == 2) { ?>
                <form name="makeUser" method="post">
                    <input type="submit" name="Maak gebruiker" value="Maak gebruiker"/>
                    <input type="text" name="user" placeholder="username"
                           value="<?=$row['GEBRUIKERSNAAM'];?>" readonly hidden="">
                    <?php
                    } ?>

    </form>
    <?php
    echo "</div>";
}
sqlsrv_free_stmt($result);
?>
</div>