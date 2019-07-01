<?php
require 'requet.php';
Autoloader::register();
    class Typedebourse{
        private $pension;
        private $libelle;
        public function __construct($libelle='',$pension=0){
            $this->$libelle;
            $this->$pension;
        }
        public function getPension(){
            return $this->pension;
        }
        public function setPension($pension){
            $this->pension=$pension;
                
            if ($this->$pension=20000 || $this->$pension=40000){
            $this->pension = $pension;
        }
       
    }
    public function getLibelle(){
        return $this->pension;
    }
    public function setLibelle($libelle){
        if($this->$libelle=='PENSION COMPLETE' )
        $this->pension=$libelle;
    }
}
?>