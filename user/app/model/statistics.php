<?php
class statistics{
    private $db;

    public function __construct(){
        $this->db= new data();
    }

    public function getBillStatistics(){
        $sql= "SELECT * FROM donhang";
        return $this->db->getAll($sql);
    }


    public function getId($id){
        if($id>0){
            $sql="SELECT * FROM donhang WHERE id_dh= $id";
            return $this->db->getOne($sql);
        }
    }
}

?>