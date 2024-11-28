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
        $sql="INSERT INTO donhang(trangthai,name_products,address,phone,total,quantity_bill,id_pttt,id_user,id_nv) VALUES(?,?,?,?,?,?,?,?,?)";
        $param=[$data['trangthai'],$data['name_products'],$data['address'],$data['phone'],$data['total'],$data['quantity_bill'],$data['id_pttt'],$data['id_user'],$data['id_nv']];
        return $this->db->insert($sql,$param);
    }

    public function updateBill($id, $data){
        $sql = "UPDATE donhang SET trangthai=?, address=?, phone=?, id_nv=?  WHERE id_dh=?";
        $param = [$data['trangthai'], $data['address'], $data['phone'], $data['id_nv'] ,$id];
        return $this->db->upload($sql, $param);
    }

    public function delBill($id){
        if($id>0){
            $sql="DELETE FROM donhang WHERE id_dh=?";
            return $this->db->delete($sql,[$id]);
        }else{
            return null;
        }

    }


    
 
}

?>