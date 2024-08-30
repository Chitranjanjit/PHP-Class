<?php
/* -----------array_intersect-------------- */
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2=array("a"=>"red","f"=>"green","d"=>"purple");

$newArray = array_intersect_assoc($a1,$a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";
function compare($a,$b){
    if ($a===$b){
      return 0;
    }
    return ($a > $b)?1:-1;
  }
  
  function compareValue($a,$b){
    if ($a===$b){
      return 0;
    }
    return ($a > $b)?1:-1;
  }
  $newArray3 = array_intersect_uassoc($a1,$a2, "compare"); 

  echo "<pre>";
  print_r($newArray3);
  echo "</pre>";
    