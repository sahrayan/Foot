<?php
class Equipe{
    private $_joueur;
    private $_nom;
    private $_pays;
    public function __construct($joueur,$nom,$pays){
        $this->_nom=$nom;
        $this->_joueur=[];
        $this->_pays = $pays;

    }
    public function getNom(){
        return $this->_nom;
    }
    
    public function addJoueur($nouveauJoueur){
        $this->_joueur[] = $nouveauJoueur;
    }
    
}

?>