<?php
    class boCollection{
        private $category;
        private $product;
        private $data;

        public function __construct(){
            $this->category= new category();
        }

        public function showBoCollectionCate($data){
            require_once 'app/view/boCollection.php';
        }

        public function getBoCollection(){
            $this->data['dsdm']=$this->category->getCate();
            $this->data['dssp']=$this->category->getSp(2);
            return $this->showBoCollectionCate($this->data);
        }

        
    }
?>