<?php
class Pays{
    private string $_pays;
    private array $_equipe;
    public function __construct($pays){
        $this->_pays = $pays;
        $this->_equipe = [];
    }
    public function getPays(){
        return $this->_pays;
    }
// ajouter une equie dans equipe
    public function addEquipe($equipe){
        $this->_equipe[] = $equipe;
    }
// rajout de l'equipe dans Pays
    public function addPays($nouvPays){
        $this->_equipe[] = $nouvPays;
    }
// affichage des Pays :
    // public function dispPays(){
    //     $result = "L'équipe de $this sont :<br>";
	// 	foreach ($this->_equipe as $equipe){
	// 		$result.= $equipe."<br>";
	// 	}
	// 	return $result;
	// }
// retourne le pays
    public function __toString()
	{
		return $this->getPays();
	}
}
?>