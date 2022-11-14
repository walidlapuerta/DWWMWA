<?php

$tableau = [];

for($i=0;$i<=5;$i++){
    $saisie = readline("nombre") ;
    $table[$i] = $saisie;
}

$somme = array_sum($table);
echo "La somme est :". $somme ;


?>