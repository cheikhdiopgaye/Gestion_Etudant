<?php
  
  include "Etudiant.php";
  
  
    class Boursier extends Etudiant{
        private $typebourse;
        private $idetudiant;
        public function __construct(
            $matricule='',
            $nom = "",
            $prenom = "", 
            $telephone=0,
            $email="",
            $idetudiant='',
            $typebourse=0){
            parent::__construct($matricule,$nom, $prenom,$telephone, $email);
            $this->idetudiant=$idetudiant;
            $this->typebourse=$typebourse;
        } 
        public function getIdetudiant(){
            return $this->typebourse;
        }
       
        public function setIdetudiant($idetudiant){
            $this->idetudiant=$idetudiant;
        }
        public function getTypebourse(){
            return $this->typebourse;
        }
       
        public function setTypebourse($typebourse){
            $this->typebourse=$typebourse;
        }
        
    }

?>