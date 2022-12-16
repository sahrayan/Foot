<?php
class Pays{
    private string $_nom;
    private array $_equipe;
    public function __construct($nom){
        $this->_nom = $nom;
        $this->_equipe = [];
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getEquipe(){
    return $this->_equipe;
    }

    public function addPays($nouvPays){
        $this->_equipe[] = $nouvPays
    }
    
    public function addEquipe($equipe){
        $this->_equipe[] = $equipe;
    }

}
?>