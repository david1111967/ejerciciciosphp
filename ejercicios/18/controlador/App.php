<?php 
    class App {
        public function run()
        {
            if (isset($_GET['method'])) {
                $method = $_GET['method'];                
            } 
            else {
                switch ($_GET['method']) {
                    case "home":
                        $method = "home";
                        break;                                        
                    case "login":
                        $method = "login";
                        break;  
                    case "logout":
                        $method = "logout";
                }
            }
            if (isset($_GET)) {
                $method = "index";
            }

            $this->$method();            
        }

        public function index() 
        {          
            include('views/home.php');
        }
        
        public function login() 
        {          
            include('views/login.php');
        }  

        public function home()
        {
            include('views/home.php');
        }

        public function auth($usuario, $password) 
        {
            require_once("models/Usuario.php");
            $user = new Usuario($usuario, $password);
            setcookie("User", json_encode($user), time() + 3600);
        }

        public function logout() 
        {
            if (isset($_COOKIE['User'])) {                 
                setcookie("User", null, time()-1);                
            }            
        }
    }
?>