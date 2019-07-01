<?php

include "Etudiant.php";
class Nonboursier extends Etudiant{
    private $adresse;
    private $idetudiant;
    public function __construct(
        $matricule="",
        $nom = "",
        $prenom = "",
        $telephone="",
        $email="",
        $idetudiant="",
        $adresse="")
    {
        parent::__construct($matricule,$nom,$prenom,$telephone,$email);
        $this->adresse=$adresse;
        $this->idetudiant=$idetudiant;
    }
    public function getIdetudiant(){
        return $this->idetudiant;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
       $this->adresse = $adresse;
    }
    public function setIdetudiant($idetudiant){
        $this->idetudiant=$idetudiant;
    }
}
?>