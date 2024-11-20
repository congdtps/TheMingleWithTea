<?php
class bill{
    private $db;

    public function __construct(){
        $this->db= new data();
    }

    public function getBillAll(){
        $sql= "SELECT * FROM donhang";
        return $this->db->getAll($sql);
    }

    public function getId($id){
        if($id>0){
            $sql="SELECT * FROM donhang WHERE id_dh= $id";
            return $this->db->getOne($sql);
        }
    }

    
   
    public function insertBill($data){
        $sql="INSERT INTO donhang(trangthai,address,phone,total,id_pttt,id_user,id_nv) VALUES(?,?,?,?,?,?,?)";
        $param=[$data['trangthai'],$data['address'],$data['phone'],$data['total'],$data['id_pttt'],$data['id_user'],$data['id_nv']];
        return $this->db->insert($sql,$param);
    }

    
 
}

?>