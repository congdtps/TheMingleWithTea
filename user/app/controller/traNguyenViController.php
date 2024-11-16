<?php
class traNguyenvi{
    private $category;
    private $product;
    private $data;

    public function __construct(){
        $this->category= new category();
    }

    public function showTranguyenviCate($data){
        require_once 'app/view/traNguyenVi.php';
    }

    public function getTranguyenvi(){
        $this->data['dsdm']=$this->category->getCate();
        $this->data['dssp']=$this->category->getSp(5);
        return $this->showTranguyenviCate($this->data);
    }
}

?>