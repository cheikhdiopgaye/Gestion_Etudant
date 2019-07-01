<?php
  require 'requet.php';
  Autoloader::register();
 class Chambres{
    private $_numerochambre;
    private $_idbatiment;
    public function __construct($_idbatiment=0,$_numerochambre=0){
        $this->_numerochambre=$_numerochambre;
        $this->_idbatiment=$_idbatiment;
    }
    public function getNumchambre(){return $this->_numerochambre;}
    public function setNumchambre($_numerochambre){
    $this->_numerochambre=$_numerochambre;
    }
    public function getIbatiment(){return $this->_idbatiment;}
    public function setIdbatiment($_idbatiment){
    $this->_numerohambre=$_idbatiment;
    }
}
?>