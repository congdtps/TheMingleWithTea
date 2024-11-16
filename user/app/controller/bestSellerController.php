<?php
    class bestSeller{
        private $category;
        private $product;
        private $data;

        public function __construct(){
            $this->category= new category();
        }

        public function showBestSellerCate($data){
            require_once 'app/view/bestSeller.php';
        }

        public function getBestSeller(){
            $this->data['dsdm']=$this->category->getCate();
            $this->data['dssp']=$this->category->getSp(1);
            return $this->showBestSellerCate($this->data);
        }
    }
?>