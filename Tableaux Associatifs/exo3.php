<?php

$tabNotes = array (
"Prenot" => [2,10,14], 
"Perthuis" =>  [10,18,12], 
"Chakalito" => [15,8,4], 
"Gazouza"=> [14,10,8],
"Morsay"=> [20,7,18]
 ) ;


foreach($tabNotes as $nom => $notes){
  echo  $nom . "\n" ;
  foreach($tabNotes[$nom] as $notes){
    echo  $notes . "\n" ;
    
  }
  if ($nom == $key){
   
    echo "La moyenne est de :  " . $nom. "est de " . round (array_sum($tabNotes) / count($tabNotes),2);
    }
    
}
?>