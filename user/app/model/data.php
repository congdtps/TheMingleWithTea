<?php
 class data{
  private $servername = "localhost";
  private $user = "root";
  private $password = "";
  private $dbname = "theminglewithtea";
  private $stmt = "";
  private $conn = "";
  public function __construct(){
  try {
    $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;utf8", $this->user, $this->password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }    
}
   

    //C1:
    

    // public function query($sql,$param=[]){
    //   $this->stmt = $this->conn->prepare($sql);
    //   $this->stmt->execute($param);
    //   return $this->stmt;
    // }

    // public function getAll($sql){
    //   $statment=$this->query($sql);
    //   return $statment->fetchAll(PDO::FETCH_ASSOC);
    // }

    
    // public function getOne($sql){
    //   $statment=$this->query($sql);
    //   return $statment->fetch(PDO::FETCH_ASSOC);
    // }


    // public function insert($sql,$param){
    //   $this->query($sql,$param);
    //   return $this->conn->lastInsertId();
    // }

    // public function delete($sql,$param){
    //   $this->query($sql,$param);
    // }


   

    // public function upload($sql,$param){
    //   $this->query($sql,$param);
    // }

    // public function __destruct(){
    //   unset($this->conn);
    // }

    //C2

    // public function getAll($sql,$param=[]){
    //     $this->stmt = $this->conn->prepare($sql);
    //     $this->stmt->execute($param);
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    //   }

    // public function insert($sql,$param){
    //   $this->getAll($sql,$param);
    //   return $this->conn->lastInsertId();
    // }


    //  public function delete($sql,$param){
    //    $this->getAll($sql,$param);
    //  }

   



    }
?>