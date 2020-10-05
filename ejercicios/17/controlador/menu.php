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
                switch ($_GET["fibonacci"]) {
                    case "fibonacci":
                        $method = "fibonacci";
                        break;                                        
                }
            }
            
            $this->$method();            
        }

        public function fibonacci()
        {
            require_once "../controlador/fibonacci.php";
            $fibonacci = new Fibonacci;
            $fibonacci->fibonacci();
            include('../views/fibonacci.php');            
        }
    }  
?>