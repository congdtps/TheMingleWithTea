<?php
class suaTuoi{
    private $category;
    private $product;
    private $data;

    public function __construct(){
        $this->category= new category();
    }

    public function showSuatuoiCate($data){
        require_once 'app/view/suaTuoi.php';
    }

    public function getSuatuoi(){
        $this->data['dsdm']=$this->category->getCate();
        $this->data['dssp']=$this->category->getSp(6);
        return $this->showSuatuoiCate($this->data);
    }
}

?>