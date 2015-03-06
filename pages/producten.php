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
        <?php
        $query = "SELECT * FROM CATEGORIE";
        $result = sqlsrv_query($db->getConn(), $query) or die (print_r(sqlsrv_errors()));
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
            echo "<li>".$row['CATEGORIENAAM']."</li>";
        }
        ?>

    </ul>
    <button type="button">Zoeken</button>
</div>
<div id="producten">
<?php
$db->openDBConnection();
$tsql = "SELECT * FROM PRODUCT";
$result = sqlsrv_query( $db->getConn(), $tsql) or die( print_r( sqlsrv_errors() )  );
echo "Num rows" . sqlsrv_num_rows($result);
while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
    echo "<div class=\"product\">";
    echo "  <a href='?product&pid=".$row['PRODUCTNUMMER']."' title='".$row['PRODUCTNAAM']."'>
                            <img height=\"150\" src='media/producten/".$row['afbeelding']."' alt=
                            '".$row['PRODUCTNAAM']."' /></a>
                        <br />".$row['PRODUCTNAAM']."<br />&euro;".$row['PRIJS']."
                        <button type=\"button\">In Winkelwagen</button>";
    echo "</div>";
}
sqlsrv_free_stmt($result);
?>
    </div>
