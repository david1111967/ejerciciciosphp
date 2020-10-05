<?php
    class Primos {
        private $count;        
        private $numeroMin;
        private $numeroMax;
        public $result;
        

        public function __construct()
        {            
            $this->count = 0;            
            $this->numeroMin = 1;
            $this->numeroMax = 10000;
            $this->result = array();
        }

        public function primos() {            
            for ($row1 = $this->numeroMin; $row1 <= $this->numeroMax; $row1++){
                $this->count = 0;                
                for ($row2 = 1; $row2 <= $row1; $row2++){
                    if ($row1 % $row2 == 0){                        
                        $this->count++;
                    }            
                }
                if ($this->count <= 2){
                    $this->result[] = $row1;   
                }                
            }            
        }
    }
?>