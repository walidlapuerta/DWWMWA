<?php

require_once "classAnimal.php" ;

class Lapin extends Animal {

private $enVie ;

public function __construct($couleur, $pattes){

    $this->enVie = true ;
    parent::__construct($couleur, $pattes) ;

}

public function getEnVie(){return $this->enVie;}
public function setEnVie($enVie){$this->enVie = $enVie;}


public function seNourrir(){
    $txt = "Le lapin se nourrit " . "\n" ;
    return $txt ;
}

public function Fuir(){
    return "Le lapin fuit " . "\n" ;
}


public function Crier(){
return "Le lapin glapie de peur " . "\n" ; 
}

public function seDeplacer(){
    
    if($this->enVie){
        return $this->Fuir();
    }
    else{
        return "Le lapin est mort, est mort comme le mec sur mon paquet de cigarettes" ;
    }
}





}


?>