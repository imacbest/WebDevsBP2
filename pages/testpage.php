<?php

for($i = 1; $i < 41; $i++){
    for($j = 1; $j < 4; $j++){
        echo "INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (".$i.", ".$i + $j.") <br />";
    }
}

?>