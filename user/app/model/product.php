<?php
    class product{
        private $db;
        public function __construct(){
            $this->db=new data();
        }
        public function getPro($product){
            $sql= "SELECT * FROM sanpham";
            if($product==1){
                $sql.= " WHERE id_sanpham <=8 ORDER BY id_sanpham ASC";
            }else if($product==2){
                $sql.=" WHERE id_sanpham >8 ORDER BY id_sanpham ASC";
            }
            else if($product==3){
                $sql.=" WHERE id_danhmuc ORDER BY id_sanpham limit 12";

            }else if($product==4){
                $sql.=" WHERE id_sanpham ORDER BY id_sanpham ASC";

            }else if($product==5){
                $sql.=" ORDER BY id_sanpham ASC limit 4";

            }
            return $this->db->getAll($sql);
        }


        public function getId($id){
            if($id>0){
                $sql="SELECT * FROM sanpham WHERE id_sanpham= $id";
                return $this->db->getOne($sql);
            }
        }



        public function insertPro($data){
            $sql="INSERT INTO sanpham(name,price,price_sale,image,id_danhmuc) VALUES(?,?,?,?,?)";
            $param=[$data['name'],$data['price'],$data['price_sale'],$data['image'],$data['id_danhmuc']];
            return $this->db->insert($sql,$param);
        }


        public function delePro($id){
                if($id>0){
                    $sql="DELETE FROM sanpham WHERE id_sanpham=?";
                    return $this->db->delete($sql,[$id]);
                }else{
                    return null;
                }
        }


    }

?>