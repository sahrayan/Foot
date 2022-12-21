<?php
class Joueur{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_nationalite;
    private $_equipe;
    private array $_contrat;
    

    public function __construct( $nom, $prenom, $age, $nationalite, $equipe){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = $age;
        // rajout de la nationalite dans add joueur
        $this->_nationalite = $nationalite;
        $this->_nationalite = addJoueur($this);
        // je rajoute le l'equipe a new player
        $this->_equipe = $equipe;
        $this->_equipe = addNjoueur($this);
        // Creation d'une liste contrat 
        $this->_contrat = [];
    }
    public function addContrat($contrat){
        $this->_contrat[] = $contrat;
    }
    public function getContrat(){
        return $this->_casting;
    }
    public function getNom(): string{
        return $this->_nom;
    }
    public function getPrenom(): string{
        return $this->_prenom;
    }
    public function getAge(): int{
        return $this->_age;
    }
    public function getNationalite(): string{
        return $this->_nationalite;
    }
    

    public function addNouveauContrat($nouvEquipe){
        $this->_contrat[] = $nouvEquipe;
        return $this;
    }
    // Permet de montrer la durée d un contrat d'un joueur
    public function DispContrat(){
        echo $this->getNom(). " ".$this->getPrenom();
        foreach($this->_contrat as $contrat){
            echo "Le joueur ".$contrat->getEquipe()->getNom(). " a un contrat de ".$contrat->getDate()."<br>";
            
        }
    }
    public function __toString()
	{
		return $this->_prenom . " " . $this->_nom . " " . $this->_age . " " . $this->_nationalite ;
    }







}
?>