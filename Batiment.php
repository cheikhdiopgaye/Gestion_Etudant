<?php
require 'requet.php';
Autoloader::register();
class Batiment   {
    //les attributs
    private $_nombat;
    public function __construct($_nombat='')
    {
        $this->_nombat=$_nombat;
    }
    public function getNombatiment(){return $this->_nombat;}
    public function setNombatiment($nombatiment){
        if(is_char($nombatiment)){
            return $this->_nombat=$nombatiment;

        }
    }
}

?>