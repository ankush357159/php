<?php 
$num = 12345;

$revnum = 0;

while($num > 0) {
    $rem = $num % 10;
    $revnum = $revnum * 10 + $rem;
    $num = ($num - $rem) / 10;
}
echo "Reverse of 12345 is $revnum";

?>
