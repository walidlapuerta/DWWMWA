<?php
class Joueurs {
    private $id;
    private $nom;
    private $nationalite;
    private $but;
    private $passed;
    private $image ;


    public function __construct($id , $nom , $nationalite , $but, $passed, $image){
        $this->id = $id;
        $this->nom = $nom;
        $this->nationalite = $nationalite;
        $this->but = $but;
        $this->passed = $passed;
        $this->image = $image ;
    }

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getNationalite(){return $this->nationalite;}
    public function getBut(){return $this->but;}
    public function getPassed(){return $this->passed;}
    public function getImage(){return $this->image;}




    public function setNom($nom){$this->nom = $nom;}
    public function setNationalite($nationalite){$this->nationalite = $nationalite;}
    public function setBut($but){$this->but = $but;}
    public function setPassed($passed){$this->passed = $passed;}
    public function setImage($image){$this->image = $image;}


}