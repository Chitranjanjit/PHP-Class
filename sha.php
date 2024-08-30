<?php
/*-------Md5 Function------- */                                           
$str = "Hello";

$newstr = "The string: ".$str;

echo "<pre>";
print_r($newstr);
echo "</pre>";
$newstr = "md5 Binary : ".md5($str, false); //-- 16 char

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr1 = "Sha1 Binary : ".sha1($str, false); //-- 16 char

echo "<pre>";
print_r($newstr1);
echo "</pre>";
?>