<?php
    class detail{
        private $date;
        private $product;
        public function __construct(){
            $this->product=new product();
        }

        public function showDetailProduct($data){
            extract($data);
            require_once('app/view/detail.php');
        }

        public function getIdDetailProudct(){
            if((isset($_GET['id'])) && ($_GET['id'])){
                foreach($this->product->getPro(4) as $value){
                    if($value['id_sanpham']==$_GET['id']){
                        $this->data=$value;
                    }
                }
                return $this->showDetailProduct($this->data);
            }
        }



    }


?>