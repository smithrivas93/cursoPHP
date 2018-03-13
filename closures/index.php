<?php
/*
$var2 = 2;
$var = function() use($var2){
  echo 'This is a closure</br>';
  echo 'Value: '.$var2;
};

$var();
*/
$x = 3;
$numbers = [1, 2, 3, 4, 5];
$closure = function($n) use($x){
  return $n*$x;
};

$result = array_map($closure, $numbers);

var_dump($result);
?>
