<?php

class Lapin implements Interface {

    private $lapin ;

    public function __construct($lapin){

        $this->lapin = $this->seDeplacer() ;
        $this->lapin = $lapin ;
    }

    public function getLapin(){return $this->lapin;}
    public function setLapin($lapin){$this->lapin = $lapin;}


    
}

?>