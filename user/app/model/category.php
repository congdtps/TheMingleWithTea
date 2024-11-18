<?php
    class category{
        private $db;

        public function __construct(){
            $this->db= new data();
        }

        public function getCate(){
            $sql= "SELECT * FROM danhmuc";
            return $this->db->getAll($sql);
        }

        public function getId($id){
            if($id>0){
                $sql="SELECT * FROM danhmuc WHERE id_dm= $id";
                return $this->db->getOne($sql);
            }
        }

        
        public function getSp($id){
            if($id>0){
                $sql="SELECT * FROM `sanpham` WHERE id_danhmuc = $id";
                return $this->db->getAll($sql);
            }
        }
        public function insertCate($data){
            $sql="INSERT INTO danhmuc(id_dm,name_dm,link_category) VALUES(?,?,?)";
            $param=[$data['id_dm'],$data['name_dm'],$data['link_category']];
            return $this->db->insert($sql,$param);
        }

        public function delCate($id){
            if($id>0){
                $sql="DELETE FROM danhmuc WHERE id_dm=?";
                return $this->db->delete($sql,[$id]);
            }else{
                return null;
            }

        }

    
    }
?>