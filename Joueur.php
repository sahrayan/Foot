<?php
class Joueur{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_nationalite;
    private array $_contrat;
    

    public function __construct(string $nom, string $prenom, int $age, string $nationalite){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = $age;
        $this->_nationalite->addJoueur($this);
        $this->_contrat = [];
    }
    public function getContrat(){
        return $this->_casting;
    }
    public function addContrat($nouveauContrat){
        $this->_contrat[] = $nouveauContrat;
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
    public function setNom($nom){
        $this->_nom = $nom ;
        return $this;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
        return $this;
    }
    public function setAge($age){
        $this->_age = $age;
        return $this;
    }
    public function setNationalite( $nationalite){
        $this->_nationalite = $nationalite;
        return $this;
    }

    public function addNouveauContrat($nouvEquipe){
        $this->_contrat[] = $nouvEquipe;
        return $this;
    }
    public function DispContrat(){
        echo $this->getNom(). " ".$this->getPrenom();
        foreach($this->_contrat as $contrat){
            echo "Le joueur ".$contrat->getEquipe()->getNom(). " a un contrat de ".$contrat->getDate()."<br>";
            
        }
    }







}
?>