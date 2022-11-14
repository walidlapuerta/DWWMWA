<?php

$tab = ["Kesary","Walid","Clement","Fred","Maxime","Thibaut","Nadia","Manon"]; 

$chercher = readline("Cherchez prénom "); 

for( $i = 0 ; $i<count($tab);$i++){     
    if($chercher == $tab[$i]){         
        echo "En position  " . $i . "   "   . $chercher ;     } 
    
    }

?>
