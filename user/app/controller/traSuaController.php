<?php
class traSua{
    private $category;
    private $product;
    private $data;

    public function __construct(){
        $this->category= new category();
    }

    public function showTrasuaCate($data){
        require_once 'app/view/traSua.php';
    }

    public function getTrasua(){
        $this->data['dsdm']=$this->category->getCate();
        $this->data['dssp']=$this->category->getSp(3);
        return $this->showTrasuaCate($this->data);
    }
}
?>