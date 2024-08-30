<?php
$fruit = ['orange', 'banana', 'apple', 'grapes'];

$veggie = ['carrot', 'pea'];
$color = ['red', 'green', 'blue'];

$newArray1 = array_replace($fruit, $veggie, $color);

$newArray = array_replace($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($newArray1);
echo "</pre>";

$veggie1 = ['carrot', 'pea'];
$fruit1 = ['orange', 'b' => 'banana', 'apple', 'grapes'];
print_r(array_replace($fruit, $veggie));
echo "Array recursively";
print_r(array_replace_recursive($fruit,$veggie));
echo"<br>";
$array1 = array("a"=>array("red"),"b"=>array("green","pink"));

$array2 = array("a"=>array("yellow"),"b"=>array("black"));

$newArray = array_replace_recursive($array1, $array2);

print_r($newArray);




?>
