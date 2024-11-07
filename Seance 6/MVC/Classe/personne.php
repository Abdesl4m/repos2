<?php

class Personne
{
    private $nom;
    private $prenom;
    private $age;
    private $adresse;

    public function __construct($n, $pr, $a, $ad)
    {
        $this->nom = $n;
        $this->prenom = $pr;
        $this->age = $a;
        $this->adresse = $ad;
    }

    public function getNom()
    {
       return $this->nom;
    }

    public function getPrenom()
    {
       return $this->prenom;
    }

    public function getAge()
    {
       return $this->age;
    }

    public function getAdresse()
    {
       return $this->adresse;
    }
}


?>