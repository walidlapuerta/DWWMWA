<?php

$tab = [5,2,3,4,1,9,8] ;
$estVraie = true ;

while($estVraie){
    
    $estVraie = false ;

    for($i=0;$i<=count($tab)-2;$i++){
        if($tab[$i]>$tab[$i+1]){
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