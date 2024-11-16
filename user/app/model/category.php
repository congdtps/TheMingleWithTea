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

    
    }
?>