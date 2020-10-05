<?php
    class Fibonacci
    {    
        public $numero;
        public $fibonacci1;
        public $fibonacci2;
        public $result;

        public function __construct()
        {            
            $this->numero = 10;
            $this->fibonacci1 = 1;
            $this->fibonacci2 = 1;
            $this->result = array();
        }

        public function fibonacci()
        {                         
            for($row = 0; $row <= $this->numero; $row++){                
                $this->result[] = $this->fibonacci2;
                $this->fibonacci2 = $this->fibonacci1 + $this->fibonacci2;
                $this->fibonacci1 = $this->fibonacci2 - $this->fibonacci1;            
            }            
        } 
    }   
?>