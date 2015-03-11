<?php

for($i = 1; $i < 41; $i++){
    for($j = 1; $j < 7; $j++){
        if($i != 40){
            $related = $i + $j;
        }else{
            $related = 0 + $j;
        }
        echo "INSERT [PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (";
        echo $i;
        echo ", ";
        echo $related;
        echo ") <br />";
    }
}

?>