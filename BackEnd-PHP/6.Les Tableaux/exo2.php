<?php

$tableau = [];

for($i=0;$i<=5;$i++){
    $saisie = readline("nombre") ;
    $table[$i] = $saisie;

    if ($saisie<0){
        echo "Valeur négative" ."\n";
    }
    elseif($saisie>0){
        echo "Valeur positive" ."\n";
    }
}

?>