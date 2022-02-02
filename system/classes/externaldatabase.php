<?php 
    class externaldatabase {

      public  $host     = "158.108.64.54";
      public  $user     = "kiosk";
      public  $database = "equipment";
      public  $password = "749200";
      public  $conn;
      public  $result;

      public function __construct(){

        try {
          return  $this->conn = new PDO("mysql:host=" . $this->host . "; dbname=" . $this->database, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        } catch (PDOException $e) {
            echo "Database connection Error:" . $e->getMessage();
        }
      }


      public function Query($qry, $params = []){
        if(empty($params)){
            $this->result = $this->conn->prepare($qry);
            return $this->result->execute();
        }
        else{
            $this->result = $this->conn->prepare($qry);
            return $this->result->execute($params);
        }
      }

      public function rowCount(){
          return $this->result->rowCount();
      }

      public function fetchAll(){
          return $this->result->fetchAll(PDO::FETCH_OBJ);
      }

      public function fetch(){
         return $this->result->fetch(PDO::FETCH_OBJ); 
      }

    }
?>