<?php ob_start();

$titre = "Chien & Chat";
?>


class Animal{
    public $Nom ; 
    public $Race ;
    public $Age ;

public function construct()




}



<?php

$Animal = [array("nom" => "Asgard", "Race" => "Chien", "Age" => "20"), array("nom" => "Midgard", "Race"=> "Chat" ,"Age" => "6"),
 array("nom" => "Alfheim", "Race" => "Chat" , "Age"=> "3")];

?>


<form action="" method="POST">
    <div class="container border border-dark ">
        <label> Affichage : </label>
        <label></label>
    </div>

</form>



<?php
$content = ob_get_clean();
require "template.php";
?>