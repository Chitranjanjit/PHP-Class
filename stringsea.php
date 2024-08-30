<?php

// String Replace
$a = "I love php, i love php too ";

echo str_replace("php","python",$a);

echo"<br>";

//str_replace(find, replace, string)
$find =["love","php"];
$replace=["hate","python"];
echo $replaced = str_replace($find, $replace, $a);

?>