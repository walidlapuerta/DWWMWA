<?php

$tableau = [];

for($i=0;$i<=9;$i++){
    $saisie = readline("nombre") ;
    $table[$i] = $saisie;
}



$moyenne = array_sum($table) / count($table);
echo "La moyenne est :". $moyenne ;


?>