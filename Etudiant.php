<?php
require 'requet.php';
Autoloader::register();
 class Etudiant{
    /*les caractéristiques d'etudant*/
    private $matricule;
    private $nom;
    private $prenom;
    private $telephone;
    private $email;

    
  //les méthodes de la classe
  public function __construct( $matricule="",$nom = "", $prenom = "",$telephone="",$email="")
  {
      $this->matricule=$matricule;
      $this->nom=$nom;
      $this->prenom=$prenom;
      $this->telephone=$telephone;
      $this->email=$email;
  }
  public function getMatricule(){return $this->matricule;}
  public function getNom(){return $this ->nom;}
  public function getPrenom(){return $this ->prenom;}

  public function getTelephone(){return $this ->telephone;}
  public function getEmail(){return $this ->email;}
  //les setters
  public function setMatricule($matricule){ 
   $this->matricule=$matricule;
  }
  public function setNom($nom){

    $this->nom = $nom;
  }
  public function setPrenom($prenom){
  
    $this->prenom= $prenom;
    
  }
 
  public function setTelephone($telephone){
       $this->telephone=$telephone;
  }
  public function setEmail($email){
         $this->email=$email;
  }
}
?>