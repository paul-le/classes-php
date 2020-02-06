<?php 




    class User
    {

/*////////////////////////////////JOB1.1*/
/*////////////////////////////////JOB1.1*/
/*////////////////////////////////JOB1.1*/
/*////////////////////////////////JOB1.1*/
/*////////////////////////////////JOB1.1*/
/*////////////////////////////////JOB1.1*/
/*////////////////////////////////JOB1.1*/
/*////////////////////////////////JOB1.1*/

        private $id = "";
        public $login = "";
        public $email = "";
        public $firstname = "";
        public $lastname = "";


        public function register($login , $password , $email , $firstname , $lastname)
        {
            $connexion = mysqli_connect("localhost","root","","poo");
            $requeteToast = "INSERT INTO utilisateurs (login , password , email , firstname , lastname) VALUES ('".$login."','toast','".$email."','".$firstname."','".$lastname."')";
            $querytoast = mysqli_query($connexion,$requeteToast);

            $requeteRecupInfos = "SELECT * FROM utilisateurs WHERE login = 'Toast1'";
            $queryRecupInfos = mysqli_query($connexion,$requeteRecupInfos);
            $resultatRecupInfos = mysqli_fetch_all($queryRecupinfos);
            return(var_dump($resultatRecupInfos[0]));
        }

/*////////////////////////////////JOB1.2*/
/*////////////////////////////////JOB1.2*/
/*////////////////////////////////JOB1.2*/
/*////////////////////////////////JOB1.2*/
/*////////////////////////////////JOB1.2*/
/*////////////////////////////////JOB1.2*/
/*////////////////////////////////JOB1.2*/
/*////////////////////////////////JOB1.2*/

        public function connect($login , $password)
        {
            $connexion = mysqli_connect("localhost","root","","poo");
            $requeteJobConnect = "SELECT * FROM utilisateurs WHERE login ='$login'";
            $queryJobConnect = mysqli_query($connexion , $requeteJobConnect);
            $resultatJobConnect = mysqli_fetch_all($queryJobConnect);

            if($password == $resultatJobConnect[0][2])
            {
                    session_start();
                    echo " Session starto !";
                    $this->login = $resultatJobConnect[0][1];


                    $_SESSION['paul'] = $this;

            }
            else
            {
                    echo " Pas de session start désolé !";
            }
        }
        
     
/*////////////////////////////////JOB1.3*/
/*////////////////////////////////JOB1.3*/
/*////////////////////////////////JOB1.3*/
/*////////////////////////////////JOB1.3*/
/*////////////////////////////////JOB1.3*/
/*////////////////////////////////JOB1.3*/
/*////////////////////////////////JOB1.3*/
/*////////////////////////////////JOB1.3*/

        public function disconnect()
        {
            session_start();
            $connexion = mysqli_connect("localhost","root","","poo");
            $requeteJobConnect = "SELECT * FROM utilisateurs WHERE login ='Toast1'";
            $queryJobConnect = mysqli_query($connexion , $requeteJobConnect);
            $resultatJobConnect = mysqli_fetch_all($queryJobConnect);

            $this->login = "";
            $this->email = "";
            $this->firstname = "";
            $this->lastname = "";

            if(isset($_SESSION))
            {
                echo "Vous allez être déconnecté";
                session_destroy();
                var_dump($_SESSION);
            }
            else
            {
                echo "Vous êtes déconnecté !";
        
            }
        }

/*////////////////////////////////JOB1.4*/
/*////////////////////////////////JOB1.4*/
/*////////////////////////////////JOB1.4*/
/*////////////////////////////////JOB1.4*/
/*////////////////////////////////JOB1.4*/
/*////////////////////////////////JOB1.4*/
/*////////////////////////////////JOB1.4*/
/*////////////////////////////////JOB1.4*/

        public function delete()
        {
        session_start();
        $connexion = mysqli_connect("localhost","root","","poo");
        $requeteJobDelete = "DELETE FROM utilisateurs WHERE login = 'Toast1'";
        $queryDelete = mysqli_query($connexion , $requeteJobDelete);
        session_destroy();
        }

/*////////////////////////////////JOB1.5*/
/*////////////////////////////////JOB1.5*/
/*////////////////////////////////JOB1.5*/
/*////////////////////////////////JOB1.5*/
/*////////////////////////////////JOB1.5*/
/*////////////////////////////////JOB1.5*/
/*////////////////////////////////JOB1.5*/
/*////////////////////////////////JOB1.5*/

        public function update($login,$password,$email,$firstname,$lastname)
        {
            $connexion = mysqli_connect("localhost","root","","poo");
            $requeteUpdate = "UPDATE utilisateurs SET login='".$login."' ,  password='".$password."' , email ='".$email."' , firstname ='".$firstname."', lastname='".$lastname."' WHERE login = '".$this->login."'";
            $queryUpdate = mysqli_query($connexion,$requeteUpdate);

        }


/*////////////////////////////////JOB1.6*/
/*////////////////////////////////JOB1.6*/
/*////////////////////////////////JOB1.6*/
/*////////////////////////////////JOB1.6*/
/*////////////////////////////////JOB1.6*/
/*////////////////////////////////JOB1.6*/
/*////////////////////////////////JOB1.6*/
/*////////////////////////////////JOB1.6*/

        public function isConnected()
        {
            if(isset($_SESSION['paul']))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

/*////////////////////////////////JOB1.7*/
/*////////////////////////////////JOB1.7*/
/*////////////////////////////////JOB1.7*/
/*////////////////////////////////JOB1.7*/
/*////////////////////////////////JOB1.7*/
/*////////////////////////////////JOB1.7*/
/*////////////////////////////////JOB1.7*/
/*////////////////////////////////JOB1.7*/

        public function getAllInfos()
        {
            $connexion = mysqli_connect("localhost","root","","poo");
            $requeteGetInfos = "SELECT * FROM utilisateurs";
            $queryGetInfos = mysqli_query($connexion,$requeteGetInfos);
            $resultatGetInfos = mysqli_fetch_all($queryGetInfos);
            return(var_dump($resultatGetInfos));
        }

/*////////////////////////////////JOB1.8*/
/*////////////////////////////////JOB1.8*/
/*////////////////////////////////JOB1.8*/
/*////////////////////////////////JOB1.8*/
/*////////////////////////////////JOB1.8*/
/*////////////////////////////////JOB1.8*/
/*////////////////////////////////JOB1.8*/
/*////////////////////////////////JOB1.8*/

        public function getLogin()
        {
            $connexion = mysqli_connect("localhost","root","","poo");
            $requeteGetInfosConnected = "SELECT * FROM utilisateurs WHERE login = '".$this->login."'";
            $queryGetInfosConnected = mysqli_query($connexion,$requeteGetInfosConnected);
            $resultatGetInfosConnected = mysqli_fetch_all($queryGetInfosConnected);
            return(var_dump($resultatGetInfosConnected[0][1]));
        }

/*////////////////////////////////JOB1.9*/
/*////////////////////////////////JOB1.9*/
/*////////////////////////////////JOB1.9*/
/*////////////////////////////////JOB1.9*/
/*////////////////////////////////JOB1.9*/
/*////////////////////////////////JOB1.9*/
/*////////////////////////////////JOB1.9*/
/*////////////////////////////////JOB1.9*/

        public function getEmail()
        {
            $connexion = mysqli_connect("localhost","root","","poo");
            $requeteGetInfosConnectedEmail = "SELECT * FROM utilisateurs WHERE login = '".$this->login."'";
            $queryGetInfosConnectedEmail = mysqli_query($connexion,$requeteGetInfosConnectedEmail);
            $resultatGetInfosConnectedEmail = mysqli_fetch_all($queryGetInfosConnectedEmail);
            return(var_dump($resultatGetInfosConnectedEmail[0][3]));
        }
        
/*////////////////////////////////JOB1.10*/
/*////////////////////////////////JOB1.10*/
/*////////////////////////////////JOB1.10*/
/*////////////////////////////////JOB1.10*/
/*////////////////////////////////JOB1.10*/
/*////////////////////////////////JOB1.10*/
/*////////////////////////////////JOB1.10*/
/*////////////////////////////////JOB1.10*/

    public function getFirstname()
    {
        $connexion = mysqli_connect("localhost","root","","poo");
        $requeteGetInfosConnectedFirstName = "SELECT * FROM utilisateurs WHERE login = '".$this->login."'";
        $queryGetInfosConnectedFirstName = mysqli_query($connexion,$requeteGetInfosConnectedFirstName);
        $resultatGetInfosConnectedFirstName = mysqli_fetch_all($queryGetInfosConnectedFirstName);
        return(var_dump($resultatGetInfosConnectedFirstName[0][4]));
    }

/*////////////////////////////////JOB1.11*/
/*////////////////////////////////JOB1.11*/
/*////////////////////////////////JOB1.11*/
/*////////////////////////////////JOB1.11*/
/*////////////////////////////////JOB1.11*/
/*////////////////////////////////JOB1.11*/
/*////////////////////////////////JOB1.11*/
/*////////////////////////////////JOB1.11*/

    public function getLastname()
    {
        $connexion = mysqli_connect("localhost","root","","poo");
        $requeteGetInfosConnectedLastname = "SELECT * FROM utilisateurs WHERE login = '".$this->login."'";
        $queryGetInfosConnectedLastname = mysqli_query($connexion,$requeteGetInfosConnectedLastname);
        $resultatGetInfosConnectedLastname = mysqli_fetch_all($queryGetInfosConnectedLastname);
        return(var_dump($resultatGetInfosConnectedLastname[0][5]));
    }

/*////////////////////////////////JOB1.12*/
/*////////////////////////////////JOB1.12*/
/*////////////////////////////////JOB1.12*/
/*////////////////////////////////JOB1.12*/
/*////////////////////////////////JOB1.12*/
/*////////////////////////////////JOB1.12*/
/*////////////////////////////////JOB1.12*/
/*////////////////////////////////JOB1.12*/

    public function refresh()
    {

        $connexion = mysqli_connect("localhost","root","","poo");
        $requeteRefresh = "SELECT * FROM utilisateurs";
        $queryRefresh = mysqli_query($connexion,$queryRefresh);
        $resultatRefresh = mysqli_fetch_all($queryRefresh);
    
        $login->$resultatRefresh[0]['login'];
        $email->$resultatRefresh[0]['email'];
        $firstname->$resultatRefresh[0]['firstname'];
        $lastname->$resultatRefresh[0]['lastname'];

    }

    }

    $paul = new User(); 
    /*$paul-> register("Toast","TOAST","email@gmail.com","Paul","LE"); <----- FONCTION REGISTER*/
    $paul-> connect("Toast","toast"); /*<----- FONCTION CONNECT
    /*$paul-> disconnect(); <----- FONCTION DISCONNECT*/
    /*$paul-> delete(); <----- FONCTION DELETE*/
    /*$paul-> update('Test1','test','testmail@gmail.com','Peul','LA');<----- FONCTION UPDATE*/
    /*$test = $paul-> isConnected();
    var_dump($test);*/
    /*$paul-> getAllInfos();*/
    /*$paul-> getLogin();*/
    /*$paul-> getEmail();*/
    /*$paul-> getFirstname();*/
    /*$paul-> getLastname();*/





    




