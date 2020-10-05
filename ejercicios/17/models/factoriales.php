<?php
    class Factoriales
    {    
        public $numeroMin;
        public $numeroMax;
        private $resultFac;
        public $result;

        public function __construct()
        {            
            $this->resultFac = 1;
            $this->numeroMax = 1000000;
            $this->numeroMin = 1;            
            $this->result = array();
        }

        public function factoriales()
        {   
            for ($row1 = 1; $row1 <= $this->numeroMax; $row1++){
                $this->resultFac = 1;
                for ($row2 = 1; $row2 <= $row1; $row2++){ 
                    $this->resultFac = $this->resultFac * $row2;                     
                } 
                if ($this->resultFac <= $this->numeroMax){
                    $this->result[] = $this->resultFac;
                }
                else {
                    break;
                }
            }                    
        } 
    } 
?>