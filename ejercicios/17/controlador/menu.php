<?php    
    $app = new Menu;
    $app->run();
    
    class Menu {
        public function run()
        {
            if (isset($_GET['method'])) {
                $method = $_GET['method'];
            } 
            else {
                switch ($_GET) {
                    case "fibonacci":
                        $method = "fibonacci";
                        break;                                        
                    case "potencias2":
                        $method = "potencias2";
                        break;
                    case "factoriales":
                        $method = "factoriales";
                        break;
                    case "primos":
                        $method = "primos";
                        break;
                }
            }
            
            $this->$method();            
        }

        public function fibonacci()
        {
            require_once "../models/fibonacci.php";
            $fibonacci = new Fibonacci;
            $fibonacci->fibonacci();
            include('../views/fibonacci.php');            
        }

        public function potencias2()
        {
            require_once "../models/potencias2.php";
            $potencias2 = new Potencias2;
            $potencias2->potencias2();
            include('../views/potencias2.php');            
        }

        public function factoriales()
        {
            require_once "../models/factoriales.php";
            $factoriales = new Factoriales;
            $factoriales->factoriales();
            include('../views/factoriales.php');            
        }

        public function primos()
        {
            require_once "../models/primos.php";
            $primos = new Primos;
            $primos->primos();
            include('../views/primos.php');            
        }
    }  
?>