
<?php


class Employe {

    private $nom ;
    private $numsecu ;
    private $salaire ;
    private $job ;

    public function __construct($nom, $numsecu, $salaire, $job){
        
        $this->nom = $nom ;
        $this->numsecu = $numsecu ;
        $this->salaire = $salaire ;
        $this->job = $job ;
    
    }

    public function getName(){return $this->nom;}
    public function getSecu(){return $this->numsecu;}
    public function getSalaire(){return $this->salaire;}
    public function getJob(){return $this->job;}

    

    public function setName($nom){$this->nom = $nom;}
    public function setSecu($numsecu){$this->numsecu = $numsecu;}
    public function setSalaire($salaire){$this->salaire = $salaire;}
    public function setJob($job){$this->job = $job;}


    

    public function __toString()
    {
        $texte = "L'employé " . $this->nom . "\n" . " possède le num de sécu :" . $this->numsecu .  "\n" ."et gagne ". $this->salaire . " euros" . "\n" ;        
        return $texte ;
    }

    
    
    
}




?>




