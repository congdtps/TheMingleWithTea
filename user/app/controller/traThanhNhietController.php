<?php
class traThanhnhiet{
    private $category;
    private $product;
    private $data;

    public function __construct(){
        $this->category= new category();
    }

    public function showTrathanhnhietCate($data){
        require_once 'app/view/traThanhNhiet.php';
    }

    public function getTrathanhnhiet(){
        $this->data['dsdm']=$this->category->getCate();
        $this->data['dssp']=$this->category->getSp(4);
        return $this->showTrathanhnhietCate($this->data);
    }
}

?>