<?php
class Contrat{
    private $_equipe;
    private $_joueur;
    private $_date;
    public function __construct(Joueur $joueur,Equipe $equipe, $date){
        $this->_equipe = $equipe;
        $this->_equipe->addContrat($this);
        // ajout de Equipe dans contrat
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
    public function __toString()
	{
		return $this->_joueur . $this->_equipe . $this->_date;
	}
        
}


?>