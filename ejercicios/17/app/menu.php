<?php
    class menu {
        public function run()
        {
            if (isset($_GET['method'])) {
                $method = $_GET['method'];
            } 
            else {
                switch ($_GET["fibonacci"]) {
                    case "fibonaccio":
                        $method = "fibonacci";
                        break;
                }
            }
    
            $this->$method();
        }

        public function fibonacci()
        {
            include('views/fibonacci.php');
        }
    }  
?>