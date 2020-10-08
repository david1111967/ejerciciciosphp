<?php 
    class App {
        public function run()
        {
            if (isset($_GET['method'])) {                
                switch ($_GET['method']) {
                    case "home":
                        $method = "home";
                        break;                                        
                    case "login":
                        $method = "login";
                        break;  
                    case "auth":
                        $metho = "auth";
                    case "logout":
                        $method = "logout";                    
                    default:
                        $method = "index";
                }
            } 
            else {
                $method = "index";
            }            

            $this->$method();            
        }

        public function index() 
        {    
            if (isset($_COOKIE['User'])){                
                header("Location: ?method=home");
            }
            else {
                header("Location: ?method=login");
            }            
        }
        
        public function login() 
        {          
            include('views/login.php');
        }  

        public function home()
        {
            if (isset($_COOKIE['User'])) {    
                $UserDecode = json_decode($_COOKIE['User']);
                $NameUsuario = $UserDecode['usuario'];
                include('views/home.php');
            }     
            else {
                header("Location: ./Index.php?method=login");
            }               
        }

        public function auth() 
        {
            if (empty($_POST["usuario"]) || empty($_POST["password"]) || isset($_POST["usuario"]) == false || isset($_POST["password"]) == false) {
                header("Location: ./Index.php?method=login");
            }
            else {
                require_once("models/Usuario.php");
                $user = new Usuario($_POST["usuario"], $_POST["password"]);
                setcookie("User", json_encode($user), time() + 3600);
                header("Location: ./Index.php?method=home");                
            }
        }

        public function logout() 
        {
            if (isset($_COOKIE['User'])) {                 
                setcookie("User", null, time()-1);
                header("Location: ./Index.php?method=login");
            }     
            else {
                header("Location: ./Index.php?method=login");
            }       
        }
    }
?>