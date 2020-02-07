<?php

    class lpdo
    {

//
//Job 1.1
//

        private $connexion="";
        private $isConnectedSqlBool=false;
        private $resultat="";
        private $lastQuery="";
        private $lastResultat="";

        public function constructeur($host,$username,$password,$db)
        {
            $this->connexion = mysqli_connect("$host","$username","$password","$db");
            $this->isConnectedSqlBool = true;

            return($this->connexion);
        }

//
//Job 1.2
//

        public function connect($host, $username, $password, $db)
        {
            if($this->isConnectedSqlBool==true)
            {
                mysqli_close($this->connexion);
                $this->isConnectedSqlBool=false;
            }
            
             $this->connexion = mysqli_connect("$host","$username","$password","$db");
             $this->isConnectedSqlBool = true;
            
            return($this->connexion);
        }

//
//Job 1.3
//

        public function destructeur()
        {
            mysqli_close($this->connexion);
        }

//
//Job 1.4
//

        public function close()
        {
            mysqli_close($this->connexion);
        }

//
//Job 1.5
//

        public function execute($query)
        {
            $requete = mysqli_query($this->connexion, $query);
            $this->resultat = mysqli_fetch_all($requete);
            $this->lastQuery = $query;
            $this->resultat = $this->lastResultat;
            return($this->resultat);
        }

//
//Job 1.6
//

        public function getLastQuery()
        {
            if($this->lastQuery == "")
            {
                return(false);
            }
            else
            {
                return($this->lastQuery);
            }
        }

//
//Job 1.7
//

        public function getLastResult()
        {
            if($this->lastResultat == "")
            {
                return(false);
            }
            else
            {
                return($this->getLastResult);
            }
        }

//
//Job 1.8
//

        public function getTables()
        {
            // return $this->execute("Select TABLE_NAME FROM information_schema.tables WHERE table_type = 'base table' AND table_schema='poo'");
        }

//
//Job 1.9
//

        public function getFields ($table){
            return $this->execute("Select COLUMN_NAME FROM information_schema.columns WHERE table_name='$table' AND table_schema='POO' ");
       }

    }
    
    // $pdo = new lpdo();
    // $pdo->constructeur("localhost","root","","poo");
    // $pdo->connect("localhost","root","","poo");
    // $test = $pdo->execute("SELECT * FROM utilisateurs");
    // $test=$pdo->getLastQuery();
    // $test2 = $pdo->execute("SELECT * FROM utilisateurs");
    // $test2=$pdo->getLastQuery();
    // var_dump($test2);
    
   
    
?>