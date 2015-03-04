<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 10:47
 */
?>
<h1>Producten</h1>
<div class="subMenu">
    <ul>
        <li>Wijn</li>
        <li>Bier</li>
        <li>Sterke drank</li>
        <li>Champagne</li>
        <li>Liquor</li>
    </ul>
    <button type="button">Zoeken</button>
</div>
<div id="producten">
<?php
$db->openDBConnection();
$tsql = "SELECT * FROM PRODUCT";
$result = sqlsrv_query( $db->getConn(), $tsql, null) or die( print_r( sqlsrv_errors() )  );
while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
    echo "<div class=\"product\">";
    echo "  <a href='?product&pid=".$row['PRODUCTNUMMER']."' title='".$row['PRODUCTNAAM']."'>
                            <img height=\"150\" src='".$row['afbeelding']."' alt=
                            '".$row['PRODUCTNAAM']."' /></a>
                        <br />".$row['PRODUCTNAAM']."<br />&euro;".$row['PRIJS']."
                        <button type=\"button\">In Winkelwagen</button>";
    echo "</div>";
}
sqlsrv_free_stmt($result);

$query = "SELECT * FROM GEBRUIKER";
$result = sqlsrv_query($db->getConn(), $query, null) or die (print_r(sqlsrv_errors() ));

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
    echo '<p>'. $row['GEBRUIKERSNAAM'] . '</p>';
}

?>
    </div>
