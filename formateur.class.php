<?php 
// Propriétés de la classe formateur
class Formateur extends Personne {
    private $salaireFixe; 
    private $niveau;

 // Constructeur de la classe Formateur
    public function __construct($nom, $numero, $prenom, $heuresup, $salaireshoraire, $niveau, $salaireFixe) {
        parent::__construct($nom, $numero, $prenom, $heuresup, $salaireshoraire);
        $this->salaireFixe = $salaireFixe;
        $this->niveau = $niveau;
    }

    // Méthode pour calculer le salaire du formateur
    public function calculSalaire() {
        return $this->salaireFixe + ($this->heuresup * $this->salaireshoraire);
    }
}
?>
