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
        <li><a href="?producten" title="Laat alles zien">Alles</a> </li>
        <?php
        $query = "SELECT * FROM CATEGORIE";
        $result = sqlsrv_query($db->getConn(), $query) or die (print_r(sqlsrv_errors()));
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
            echo "<li><a href='?producten&amp;filter=".$row['CATEGORIENAAM']."'>".$row['CATEGORIENAAM']."</a> </li>";
        }
        ?>

    </ul>
    <button type="button">Zoeken</button>
</div>
<div id="producten">
<?php
$filter = "";
if(isset($_GET['filter'])){
    $query = "SELECT * FROM CATEGORIE WHERE CATEGORIENAAM = '".addslashes($_GET['filter'])."'";
    $result = sqlsrv_query($db->getConn(),$query, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
    if(sqlsrv_num_rows($result) ){
        $filter = "WHERE CATEGORIE = '".$_GET['filter']."'";
    }

}
$tsql = "SELECT * FROM PRODUCT ".$filter;
$result = sqlsrv_query( $db->getConn(), $tsql) or die( print_r( sqlsrv_errors() )  );

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
    echo "<div class=\"product\">";
    echo "  <a href='?product&pid=".$row['PRODUCTNUMMER']."' title='".$row['PRODUCTNAAM']."'>
                            <img height=\"150\" src='media/producten/".$row['afbeelding']."' alt=
                            '".$row['PRODUCTNAAM']."' /></a>
                        <br />".$row['PRODUCTNAAM']."<br />&euro;".$row['PRIJS']."<br />
                        <button type=\"button\">In Winkelwagen</button>";
    echo "</div>";
}
sqlsrv_free_stmt($result);
?>
    </div>
