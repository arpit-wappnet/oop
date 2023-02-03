<?php
    // interface declaration
    interface WebApp {
    
        public function login($email, $password);
        
        public function register($email, $password, $username);
        
        public function logout();
        
    }


    // class declaration
    class Login implements WebApp { 

        public $email;
        public $password;
        public $username;
    
        // methods definition
        public function login($email, $password) {
            echo "Login the user with email:"   . $email  .'<br>'  .$password;
            $this->email=$email;

            $this->password=$password;

            return $email;
        }
        
        public function register($email, $password, $username) {
            echo "User registered: Email=".$email." and Username=".$username;
        }
        
        public function logout() {
            echo "User logged out!";
        }
        
    }

    $Arpit = new login();
    $Arpit->login("arpit@gmail.com","vfdg7234");

    echo "<pre>";
    print_r($Arpit);
    

    
?>