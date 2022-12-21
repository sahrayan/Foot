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


    public function addContrat($contrat){
        $this->_contrat[] = $contrat;
    }


    public function dispEquipe(){
        $result = "Les joueurs de l'équipe $this sont :" . "<br>";
		foreach ($this->_listJoueur as $joueur) {
			$result .= $joueur. "<br>";
		}
		return $result;
	}


    public function dispContrat(){
        $result = $this->getEquipe();
        foreach ($this->_contrat as $contrat){
            $result .= $contrat. "<br>";
        }
    }

    public function __toString()
	{
		return $this->getEquipe();
	}

}
?>

    