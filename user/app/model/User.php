<?php


class UserModel{
   private $db;
   function __construct()
   {
       $this->db= new data();
   }
   function checkUser($user,$pass){
       // $sql = "SELECT * FROM user WHERE name = ? AND pass = ?";
       // return $this->db->getArrOne($sql,[$user,$pass]);
       $sql ="SELECT * FROM user WHERE name_user = ? AND password_user = ?";
       return $this->db->getOne_User($sql,[$user,$pass]);
   }
   function inserUser($data){
       $sql = "INSERT INTO user(name, email, password) VALUES(?,?,?)";
       $param=[$data['name'],$data['email'],$data['password']];
       return $this->db->insert($sql,$param);
   }
   function checkmail($email){
       $sql = "SELECT * FROM user WHERE email = '".$email."'";
       return $this->db -> getOne_User($sql);
   }
}


?>