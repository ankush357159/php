<?php 
$json = '{"firstName":"Manoj", "lastName":"Singh","email":"manoj.singh@testmail.com"}';

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);  


var_dump(json_decode($json, true));

echo json_encode($arr); 
 
?>



 