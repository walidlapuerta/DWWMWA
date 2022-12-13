<?php
$random = rand(1,9) ;
echo $random . "\n" ;
for($i=1;$i<=10;$i++){
    $Resultat = $i *$random ;
    echo "$i * $random" . "= " . $Resultat . "\n" ;
}


?>