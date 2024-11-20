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
       $sql = "INSERT INTO user(name_user, email, password_user) VALUES(?,?,?)";
       $param=[$data['name_user'],$data['email'],$data['password_user']];
       return $this->db->insert($sql,$param);
   }
   function checkmail($email){
       $sql = "SELECT * FROM user WHERE email = '".$email."'";
       return $this->db -> getOne_User($sql);
   }

   public function getUser(){
    $sql="SELECT * FROM user";
    return $this->db->getAll($sql);
}

public function getId($id){
    if($id>0){
        $sql="SELECT * FROM user WHERE id_user= $id";
        return $this->db->getOne($sql);
    }
}



    public function inserUserAdmin($data){
    $sql = "INSERT INTO user(id_user,name_user, email, password_user,role) VALUES(?,?,?,?,?)";
    $param=[$data['id_user'],$data['name_user'],$data['email'],$data['password_user'],$data['role']];
    return $this->db->insert($sql,$param);
}


public function delUser($id){
    if($id>0){
        $sql="DELETE FROM user WHERE id_user=?";
        return $this->db->delete($sql,[$id]);
    }else{
        return null;
    }

}

public function uploadUser($id, $data) {
    $sql = "UPDATE user SET  name_user=?, email=?, password_user=?, phone=?, address=?, role=?  WHERE id_user=?";
    $param = [$data['name_user'], $data['email'], $data['password_user'], $data['phone'],$data['address'],$data['role'], $id];
    return $this->db->upload($sql, $param);
}




}

 



?>