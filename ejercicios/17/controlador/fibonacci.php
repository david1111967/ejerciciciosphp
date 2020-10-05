<?php
    class Fibonacci
    {    
        public $numero;
        public $fibonacci1;
        public $fibonacci2;
        public $result;

        public function __construct()
        {            
            $this->numero = 1000000;
            $this->fibonacci1 = 1;
            $this->fibonacci2 = 1;
            $this->result = array();
        }

        public function fibonacci()
        {   
            while($this->fibonacci2 < $this->numero) {
                $this->result[] = $this->fibonacci2;
                $this->fibonacci2 = $this->fibonacci1 + $this->fibonacci2;
                $this->fibonacci1 = $this->fibonacci2 - $this->fibonacci1;            
            }            
        } 
    }   
?>