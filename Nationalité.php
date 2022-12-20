<?php
class Nationalite{
    private string $_nom;
    private $_joueur;

    public function __construct( string $nom){
        $this->_nom = $nom;
        $this->_joueur = [];
    }
    
    public function getJoueur(){
        return $this->_joueur;
    }

    public function addJoueur($nouveauJoueur){
        $this->_joueur[] = $nouveauJoueur;
    }

    public function getNom():string {
        return $this->_nom;
    }

    // public function setNationalite(){
    //     $this->_nationalite = $nationalite;
    // }


        
}

?>