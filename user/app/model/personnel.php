<?php
class personnel{
    private $db;

    public function __construct() {
        $this->db = new data(); 
    }

    public function insertPersonnel($data) {
        $sql = "INSERT INTO nhanvien(id_nv,name_nv, email, password , role) VALUES (?,?,?,?,?)";
        $param = [$data['id_nv'],$data['name_nv'], $data['email'], $data['password'], $data['role']];
        return $this->db->insert($sql, $param);
    }
    public function delPersonnel($id){
        if($id>0){
            $sql="DELETE FROM nhanvien WHERE id_nv=?";
            return $this->db->delete($sql,[$id]);
        }else{
            return null;
        }

    }
    public function getpersonnel(){
        $sql= "SELECT * FROM nhanvien";
        return $this->db->getAll($sql);
    }
    public function uploadPersonnel($id, $data) {
        $sql = "UPDATE nhanvien SET id_nv=?, name_nv=?, email=?, password=? , role=? WHERE id_nv = $id";
        $param = [$data['id_nv'], $data['name_nv'], $data['email'], $data['password'], $data['role']];
        return $this->db->upload($sql, $param);
    }   

}
?>