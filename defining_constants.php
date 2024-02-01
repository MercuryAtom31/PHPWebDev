<?php
$PI = 3.14;
$CIRCUM = 2.0;
$DIAMETER = 4.0;

Echo "$PI</br>";
echO "$CIRCUM</br>";
eCHo "$DIAMETER </br>";

$a = 5;
$b = 2;

echo "$a + $b = " . ($a + $b) . "</br>";

function stringToArray($str){
    $myArray = explode(';', $str);
    print_r($myArray) . "<br>";
    //echo ($myArray) . "<br>"; try this
}

echo stringToArray("String;separated;by;semicolon")."<br>";
?>

<!--
http://localhost/WEB_DEV_WITH_PHP/CHALLENGES/CHALLENGE1/
-->