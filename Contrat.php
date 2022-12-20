<?php
class Contrat{
    private $_equipe;
    private $_joueur;
    private $_date;
    public function __construct(Joueur $joueur,Equipe $equipe, $date){
        $this->_equipe = $equipe;
        $this->_equipe->addJoueur($joueur);
        // ajout de Equipe dans joueur
        $this->_joueur = $joueur;
        $this->_joueur->addContrat($this);
        // ajout de joueur dans contrat
        $this->_date = $date;
    }
    // methode
    public function getJoueur() {
        return $this->_joueur;
    }
    public function getEquipe() {
        return $this->_equipe;
    }
    public function getDate() {
        return $this->_date;
    }
        
}


?>