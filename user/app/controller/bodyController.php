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
            return $this->showBody($this->data);
        }
        

    }


?>