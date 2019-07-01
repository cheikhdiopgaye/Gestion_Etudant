<?php
  
     class  Loger{
        private $idboursier;
        private $idchambre;
        public function __construct(
                $idboursier="",
                $idchambre=""
            ){
            
                $this->idboursier=$idboursier;
                $this->idchambre=$idchambre;
        }
        public function getIdboursier(){
            return $this->idboursier;
        }
        public function setIdboursier($idboursier){
            $this->idboursier= $idboursier;
        }
        public function getIchambre(){
            return $this->idchambre;
        }
        public function setIdchambre($idchambre){
            $this->idchambre= $idchambre;
        }     
}
?>