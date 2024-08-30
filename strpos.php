<?php
/*-------strpos --- Find the position of the first occurrence------- */
$str = "Hello world. The world is nice WORLD";
//strpos(string, find, start)
$newStr = strpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = strpos($str, "world", 10);

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newstr1= strrpos($str,"world");
echo "<pre>";
print_r($newstr1);
echo "</pre>";
//strrpos
//strripos()
//stripos()
$newstr2 = strripos($str,"world");
echo "<pre>";

print_r($newstr2);
echo "</pre>";


