<?php
/* Multiple Array Merge */
// $fruit = ["orange", "banana", "grapes"];
// $veggie = ['carrot', 'pea'];
// $color = ['red', 'blue'];
$fruit = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];

$veggie = ['b' => ['color' => ['red','blue','green']],'e' => 'pea',55, 68]; 
$newArray = array_merge_recursive($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>