<?php

$tab = [54,12,83,474,21,93,8] ;
$estVraie = true ;
//tri à bulle

while($estVraie){
    $estVraie = false ;
    for($i=0;$i<=count($tab)-2;$i++){
        if($tab[$i]<$tab[$i+1]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp ;
            $estVraie = true;
        }
    }
}

foreach($tab as $valeur){
    echo $valeur . "\n" ;
}

?>