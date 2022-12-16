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
    public function setNom(){
        $this->_nom = $nom;
    }
    public function setNationalite(){
        $this->_nationalite= $nationalite;
    }

    public function addJoueur($nouveauJoueur){
        $this->_joueur[] = $nouveauJoueur;
    }

        
}

?>