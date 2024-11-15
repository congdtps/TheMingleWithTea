<?php
    class menu2{
        private $category;
        private $product;
        private $data;

        public function __construct(){
            $this->product= new product();
        }

        public function showProduct($data){
            require_once 'app/view/menu2.php';
        }

        public function getProduct_second(){
            $this->data['dssp']=$this->product->getPro(2);
            return $this->showProduct($this->data);
        }


    }

?>