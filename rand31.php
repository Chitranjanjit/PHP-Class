<?php
/*------------Array Rand------------ */
$color = array("red","green","blue","yellow","brown");

$newArray = array_rand($color);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo $color[$newArray]."<br><br>";

$color1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$newArray2 = array_rand($color1, 2);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

$color2 = array("red","green","blue","yellow","brown");

shuffle($color2);

echo "<pre>";
print_r($color2);
echo "</pre>";
str