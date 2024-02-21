<?php
// Propriétés de la classe personne 
abstract class Personne {
    protected $numero;
    protected $nom;
    protected $prenom;
    protected $heuresup;
    protected $salaireshoraire;

// Constructeur de la classe
    public function __construct($nom, $numero, $prenom, $heuresup, $salaireshoraire) {
        $this->nom = $nom;
        $this->numero = $numero;
        $this->prenom = $prenom;
        $this->heuresup = $heuresup;
        $this->salaireshoraire = $salaireshoraire;
    }

// Méthode abstraite pour calculer le salaire 
    abstract public function calculSalaire();

// Méthode magique pour obtenir une représentation sous forme de chaîne de la personne
    public function __toString() {
        return $this->numero . ' ' . $this->nom . ' ' . $this->prenom;
    }

    public function __get($attr) {
        if (property_exists($this, $attr))
            return $this->$attr;
    }
}
?>