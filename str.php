<?php
$str = "This is B-tech Class";

$newStr = strlen($str);
$newstr1 = str_word_count($str,1);
echo "<pre>";
print_r($newStr);
echo "</pre>";
echo "<pre>";
print_r($newstr1);
echo"</pre>";

$count = substr_count("Hello world. The world is nice world hello"," ",1, 40);

echo "<pre>";
print_r($count);
echo "</pre>";

/*-------strpos --- Find the position of the first occurrence------- */
$str = "Hello world. The world is nice";

$newStr = strpos($str, "world",-20);

echo "<pre>";
print_r($newStr);
echo "</pre>";



?>
