<?php
class Nationalite{
    private string $_nom;
    private $_joueur;

    public function __construct( string $nom){
        $this->_nom = $nom;
        $this->_joueur = [];
    }
    public function getNom(){
        return $this->_nom;
    }
   
}

?>