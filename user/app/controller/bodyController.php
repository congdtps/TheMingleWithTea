<?php
    class body{
        private $data;
        private $product;


        public function __construct(){
            $this->product=new product();
        }


        public function showBody($data){
            require_once('app/view/body.php');
        }

        public function getProductBody(){
            $this->data['dssp']=$this->product->getPro(3);
            $this->data['dsspbest']=$this->product->getPro(6);
            return $this->showBody($this->data);
        }
        

    }


?>