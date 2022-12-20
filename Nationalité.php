<?php
class Nationalite{
    private string $_nom;

    public function __construct( string $nom){
        $this->_nom = $nom;
    }



    public function getNom():string {
        return $this->_nom;
    }

    // public function setNationalite(){
    //     $this->_nationalite = $nationalite;
    // }


        
}

?>