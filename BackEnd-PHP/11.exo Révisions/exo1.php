<?php


$Euro = readline("Entrez un montant") ;
$UK = 1;
$USA = 2 ;
$Canada = 3 ;
$Japon = 4 ;
$Mexique = 5 ;
$Maroc = 6 ;
$Inde = 7 ;


echo " 1. Angleterre : £ \n 2. USA : $ \n 3. Canada : Canadian $ \n 4.Japon : Yen \n 5.Mexique : Pesos \n 6.Maroc : Dirham \n 7.Inde : Roupie \n"  ;
echo "\n" ;
$Pays = readline("Choissisez un pays et sa devise \n") ;

echo "\n" ;

if($Pays==$UK){
$UK = $Euro * 0.874 ;
echo "Le montant converti de cette devise est de : " . $UK . "  £ \n " ;
}
elseif($Pays==$USA){
    $US = $Euro *1.037 ;
    echo "Le montant converti de cette devise est de : " . $US . "  $  \n" ;
}
elseif($Pays==$Canada){
    $Cnd = $Euro *1.379 ;
    echo "Le montant converti de cette devise est de : " . $Cnd . "  Canadian $  \n" ;
}
elseif($Pays==$Japon){
    $JPY = $Euro *144.536 ;
    echo "Le montant converti de cette devise est de : " . $JPY . "  Yen  \n" ;
}
elseif($Pays==$Mexique){
    $MXP = $Euro *20.081 ;
    echo "Le montant converti de cette devise est de : " . $MXP . " Pesos  \n" ;
}
elseif($Pays==$Maroc){
    $MAD = $Euro *11.276 ;
    echo "Le montant converti de cette devise est de : " . $MAD . "  Dirham  \n" ;
}
elseif($Pays==$Inde){
    $INR = $Euro *83.997 ;
    echo "Le montant converti de cette devise est de : " . $INR . " Roupie  \n" ;
}










// echo "\n" ;

// switch ($Operation) {
//     case 1:
        
//         break;
//     case 2:
         
//         break;
//     case 3: 
        
//         break;
//     case 4:
        
//         break;

//     case 5:    
    
//         break;
//     case 6:
        
//         break;
//     case 7:
        
//          break;
        
// }

// echo "Le résultat de l'opération est :" . $Result;

?>