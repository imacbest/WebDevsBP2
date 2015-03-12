<?php

?>

<a href="?addProduct" title="Voeg een product toe">Voeg een product toe</a> <br />
<h1>Producten</h1>
<div class="subMenu">
    Categorien
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
    <br />
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
    if(isset($_GET['s'])){
        if(!empty($filter)){
            $filter .= " AND ";
        }
        $filter .= "PRODUCTNAAM like '%".addslashes($_GET['s'])."%'";
    }
    $tsql = "SELECT * FROM PRODUCT ".$filter;
    $result = sqlsrv_query( $db->getConn(), $tsql) or die( print_r( sqlsrv_errors() )  );

    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
        echo "<div class=\"product\">";
        echo "  <a href='?product&pid=".$row['PRODUCTNUMMER']."' title='".$row['PRODUCTNAAM']."'>
                            <img height=\"150\" src='media/producten/".$row['afbeelding']."' alt=
                            '".$row['PRODUCTNAAM']."' /></a>
                        <br />".$row['PRODUCTNAAM']."<br />&euro;".$row['PRIJS']."<br />
                        <a href='?adminProductsEdit&pEdit=".$row['PRODUCTNUMMER']."' title='Wijzig ".$row['PRODUCTNAAM']."!'>Wijzigen</a>";
        echo "</div>";
    }
    sqlsrv_free_stmt($result);
    ?>
</div>