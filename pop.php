<?php
/* --------- Delete from End------- */
$fruit = ["orange", "banana", "apple", "grapes"];

array_pop($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";

array_push($fruit, 'watermelon', 'cccc');
echo "<br>";
echo "<pre>";
print_r($fruit);
echo "</pre>";
?>