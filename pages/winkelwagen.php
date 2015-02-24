<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 10:47
 */
?>
<h1>Winkelwagen</h1>

<?php
$string = "Hello World!";

for($i = 0; $i < strlen($string); $i++){
    echo $string[$i] . "<br />";
}

echo "<br />";
for($i = strlen($string)-1; $i > 0; $i--){
    echo $string[$i] . "<br />";
}



?>
