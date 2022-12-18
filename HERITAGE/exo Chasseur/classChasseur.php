<?php

require "classHumain.php" ;

class Chasseur extends Humain {

private $arme ;

public function __construct($nom, $arme)
{
    parent::__construct($nom) ;
    $this->arme = $arme ;
}

public function getArme(){return $this->arme;}
public function setArme($arme){$this->arme = $arme;}


public function seDeplacer(){
    return "Le chasseur avance " . "\n" ;
}

public function Chasser(){
    return "Le chasseur " . $this->nom . " tire sur le lapin avec son " . $this->arme . " et.... ". "\n";
}


}





?>