<?php
class Nationalite{
    private string $_nationalite;

    public function __construct( string $nationalite){
        $this->_nationalite = $nationalite;
        $this->_joueur = [];
    }
    public function getNationalite():string {
        return $this->_nationalite;
    }
    // public function addJoueur($joueur){
    //     $this->_joueur[] = $joueur;
    // }
    // display Nationaliter des joueurs
    // public function dispNationalite(){
    //     $result ="les joueurs on la Nationalité ".$this. "<br>";
    //     foreach($this->_joueur as $joueur){
    //         $result .= $joueur ."<br>";
    //     }
    //     return $result;
    // }
    public function __toString(){
        return $this->getNationalite();
    }

   


        
}

?>