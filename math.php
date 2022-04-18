<?php 
echo (("Floor of a number".floor(5.3) == 5) ? "5" : "Not 5". "<br>");
echo ("Ceiling of a number".ceil(5.3) == 6) ? "6" : "Not 6". "<br>";
echo (decoct(10).'<br>');
echo (dechex(10).'<br>');
echo (bindec('1010').'<br>');
echo (octdec('10').'<br>');
echo (hexdec('A').'<br>');
echo (base_convert('10',10,2).'<br>');
echo (fmod(10,3).'<br>');
echo (exp(2).'<br>');
echo (log(10).'<br>');
echo (log10(10).'<br>');
echo (pow(2,3).'<br>');
echo (sqrt(4).'<br>');
echo (sin(3.14/2).'<br>');
echo (cos(3.14/2).'<br>');
echo (tan(3.14/4).'<br>');
echo (asin(1).'<br>');
echo (acos(1).'<br>');
echo (atan(1).'<br>');
echo (atan2(1,1).'<br>');
echo (sinh(1).'<br>');
echo (cosh(1).'<br>');
echo (tanh(1).'<br>');
echo (asinh(1).'<br>');
echo (acosh(1).'<br>');
echo (atanh(1).'<br>');
echo (deg2rad(45).'<br>');
echo (rad2deg(3.14/2).'<br>');
echo (pi().'<br>');
echo (rand(1,10).'<br>');
echo (mt_rand(1,10).'<br>');
echo (getrandmax().'<br>');

?>
