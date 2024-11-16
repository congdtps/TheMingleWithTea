<?php
    class menu1{
        private $category;
        private $product;
        private $data=[];

        public function __construct(){
            $this->product= new product();
            $this->category= new category();
        }

        public function showProduct($data){
            require_once 'app/view/menu1.php';
        }

        public function getProduct_first(){
            $this->data['dssp']=$this->product->getPro(1);
            $this->data['dsdm']=$this->category->getCate();
            return $this->showProduct($this->data);
        }

       

    }

?>