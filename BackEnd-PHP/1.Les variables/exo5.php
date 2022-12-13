<?php

$A = 1 ;
$B = 2;
$C = 3;
$Z = $B;
$B = $A;
$A = $C;
$C = 2;

echo " La variable A est de :" . $A . "\n";
echo " La variable B est de :". $B . "\n";
echo " La variable c est de :". $C ;

?>