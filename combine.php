<?php

$name = array("Ram","Mohan","Salman");
$age = array("35","37","43","88","gs");

$newArray = array_combine($name, $age);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>