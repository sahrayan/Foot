<?php
class Equipe{
    private $_equipe;
    private $_pays;
    private $_contrat;
    public function __construct($equipe,$pays){
        $this->_equipe = $equipe;
		$this->_listJoueur = [];
		$this->_pays = $pays;
		$this->_pays->addEquipe($this);
		$this->_contrat = [];

    }
    public function getEquipe(){
        return $this->_equipe;
    }
    public function addNjoueur($joueur){
        $this->_listJoueur[] = $joueur;
    }
    








}
?>
// public function addJoueur($nouveauJoueur){
//     $this->_joueur[] = $nouveauJoueur;
// }
    