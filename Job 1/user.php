<?php 

    class User
    {
        private $id = "";
        public $login = "";
        public $email = "";
        public $firstname = "";
        public $lastname = "";


        public function register($login , $password , $email , $firstname , $lastname)
        {
            $connexion = mysqli_connect("localhost","root","","poo");
            $requetetoast = "INSERT INTO utilisateurs (login , password , email , firstname , lastname) VALUES ('".$login."','toast','".$email."','".$firstname."','".$lastname."')";
            $querytoast = mysqli_query($connexion,$requetetoast);

            $requeterecupinfos = "SELECT * FROM utilisateurs";
            $queryrecupinfos = mysqli_query($connexion,$requeterecupinfos);
            $resultatrecupinfos = mysqli_fetch_all($queryrecupinfos);
            return(var_dump($resultatrecupinfos));

            /*$this->login = $login;
            $this->email = $email;
            $this->firstname = $firstname;
            $this->lastname = $lastname;*/

            
        }
    }

    $paul = new User(); 
    $paul-> register("Toast","TOAST","email@gmail.com","Paul","LE");
    