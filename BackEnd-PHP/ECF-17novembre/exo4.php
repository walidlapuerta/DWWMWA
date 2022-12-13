<?php

$tab = ["H : hydrogene \n","He : Hélium \n", "P : Phosphore \n" , "V : Vanadium \n" , "Pb : Plomb \n" , "I : Iode\n", "Kr : Krypton \n" , "Vb : Vibranium \n" , "Ad : Adamantium \n" , "Tr : Tritium \n"] ;
$estVraie = true ;




for($i=0;$i<=count($tab);$i++){
    echo $tab[$i] ;
}



// echo "*******************" ;


while($estVraie){

    
    
    $estVraie = false ;

    for($i=0;$i<=count($tab)-2;$i++)
    {

        
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