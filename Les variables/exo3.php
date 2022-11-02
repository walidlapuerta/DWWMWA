<?php

$A = 3 ;
$B = 10;
$C = $A + $B;
$B = $A + $B ;
$A = $C ;

echo " La variable A est de :" . $A . "\n";
echo " La variable B est de :". $B . "\n";
echo " La variable c est de :". $C ;

?>