<?php
    class menu1{
        private $category;
        private $product;
        private $data=[];

        public function __construct(){
            $this->product= new product();
        }

        public function showProduct($data){
            require_once 'app/view/menu1.php';
        }

        public function getProduct_first(){
            $this->data['dssp']=$this->product->getPro(1);
            return $this->showProduct($this->data);
        }

       

    }

?>