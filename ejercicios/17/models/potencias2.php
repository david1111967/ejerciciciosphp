<?php
    class Potencias2 {
        private $numero;
        public $potencia;
        public $result;

        public function __construct()
        {            
            $this->numero = 2;
            $this->potencia = 24;            
            $this->result = array();
        }

        public function potencias2() {            
            for ($row = 1; $row <= $this->potencia; $row++) {
                $this->result[] = (pow($this->numero, $row));
            }            
        }
    }
?>