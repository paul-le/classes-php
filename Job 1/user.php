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
            $requeteJobConnect = "SELECT * FROM utilisateurs WHERE login ='Toast1'";
            $queryJobConnect = mysqli_query($connexion , $requeteJobConnect);
            $resultatJobConnect = mysqli_fetch_all($queryJobConnect);

            if($password == $resultatJobConnect[0][2])
            {
                    session_start();
                    echo " Session starto !";
                    $this->login = $resultatJobConnect[0][1];
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

            $polo = $paul->isConnected;

            if(isset($_SESSION))
            {
                return true;
    
            }
            else
            {
                return false;
            }
        }

    }

    $paul = new User(); 
    /*$paul-> register("Toast","TOAST","email@gmail.com","Paul","LE"); <----- FONCTION REGISTER*/
    /*$paul-> connect("Toast1","toast"); /*<----- FONCTION CONNECT*/
    /*$paul-> disconnect(); <----- FONCTION DISCONNECT*/
    /*$paul-> delete(); <----- FONCTION DELETE*/
    /*$paul-> update('Test1','test','testmail@gmail.com','Peul','LA');*/
    $paul-> isConnected();


    




