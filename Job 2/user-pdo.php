<?php 




    class Userpdo
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
            $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
            $query = "INSERT INTO utilisateurs (login , password , email , firstname , lastname) VALUES ('".$login."','toast','".$email."','".$firstname."','".$lastname."')";
            $pdo_prepare = $pdo->prepare($query);
            $pdo_prepare->execute();
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
            $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
            $queryJobConnect = "SELECT * FROM utilisateurs WHERE login ='$login'";
            $pdo_prepare = $pdo->prepare($queryJobConnect);
            $pdo_prepare->execute();

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
            $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
            $queryJobConnect = "SELECT * FROM utilisateurs WHERE login ='Toast1'";
            $pdo_prepare = $pdo->prepare($queryJobConnect);
            $pdo_prepare->execute();
            $resultat = $pdo_prepare->fetchAll(); 

            $this->login = "";
            $this->email = "";
            $this->firstname = "";
            $this->lastname = "";

            if(isset($_SESSION))
            {
                echo "Vous allez être déconnecté";
                session_destroy();
                // var_dump($_SESSION);
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
        $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
        $queryJobDelete = "DELETE FROM utilisateurs WHERE login = 'Toast1'";
        $pdo_prepare = $pdo->prepare($queryJobDelete);
        $pdo_prepare->execute();
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
            $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
            $queryUpdate = "UPDATE utilisateurs SET login='".$login."' ,  password='".$password."' , email ='".$email."' , firstname ='".$firstname."', lastname='".$lastname."' WHERE login = '".$this->login."'";
            $pdo_prepare = $pdo->prepare($queryUpdate);
            $pdo_prepare->execute();

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
            $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
            $queryGetInfos = "SELECT * FROM utilisateurs";
            $pdo_prepare = $pdo->prepare($queryGetInfos);
            $pdo_prepare->execute();
            $$resultatGetInfos = $pdo_prepare->fetchAll(); 
            return($resultatGetInfos);
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
            $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
            $queryGetInfosConnected = "SELECT * FROM utilisateurs WHERE login = '".$this->login."'";
            $pdo_prepare = $pdo->prepare($queryGetInfosConnected);
            $pdo_prepare->execute();
            $resultatGetInfosConnected = $pdo_prepare->fetchAll();
            return($resultatGetInfosConnected[0][1]);
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
            $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
            $queryGetInfosConnectedEmail = "SELECT * FROM utilisateurs WHERE login = '".$this->login."'";
            $pdo_prepare = $pdo->prepare($queryGetInfosConnectedEmail);
            $pdo_prepare->execute();
            $resultatGetInfosConnectedEmail = $pdo_prepare->fetchAll();
            return($resultatGetInfosConnectedEmail[0][3]);
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
        $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
        $queryGetInfosConnectedFirstName = "SELECT * FROM utilisateurs WHERE login = '".$this->login."'";
        $pdo_prepare = $pdo->prepare($queryGetInfosConnectedFirstName);
        $pdo_prepare->execute();
        $resultatGetInfosConnectedFirstName = $pdo_prepare->fetchAll();
        return($resultatGetInfosConnectedFirstName[0][4]);
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
        $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
        $queryGetInfosConnectedLastname = "SELECT * FROM utilisateurs WHERE login = '".$this->login."'";
        $pdo_prepare = $pdo->prepare($queryGetInfosConnectedLastname);
        $pdo_prepare->execute();
        $resultatGetInfosConnectedLastname = $pdo_prepare->fetchAll();
        return($resultatGetInfosConnectedLastname[0][5]);
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

        $pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
        $queryRefresh = "SELECT * FROM utilisateurs";
        $pdo_prepare = $pdo->prepare($queryRefresh);
        $pdo_prepare->execute();
        $resultatRefresh = $pdo_prepare->fetchAll();
    
        $login->$resultatRefresh[0]['login'];
        $email->$resultatRefresh[0]['email'];
        $firstname->$resultatRefresh[0]['firstname'];
        $lastname->$resultatRefresh[0]['lastname'];

    }

    }

    $paul = new Userpdo();
    // $paul-> register("ToastPDO","TOASTPDO","emailPDO@gmail.com","PaulPDO","LE");
    // $paul-> connect("Toast","toast"); 
    // $paul-> disconnect();
    // $paul-> delete();
    // $paul-> update('Test1','test','testmail@gmail.com','Peul','LA');
    // $test = $paul-> isConnected();
    // $paul-> getAllInfos();*/
    // $paul-> getLogin();*/
    // $paul-> getEmail();*/
    // $paul-> getFirstname();*/
    // $paul-> getLastname();*/