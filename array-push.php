<?php 
$ele = array('1', '2', '3');
array_push($ele, '4');

print_r($ele);

for ($i = 0; $i < count($ele); $i++) {
    echo $ele[$i];
}

$pop1 = array_sum($ele);
echo $pop1;

$pop2 = array_fill(0, count($ele), '0');
echo $pop2;


?>
