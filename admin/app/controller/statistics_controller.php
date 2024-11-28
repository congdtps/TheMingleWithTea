<?php
class statisticsController{
    private $data;
    private $statistics;

    public function __construct(){
        $this->statistics=new statistics();
    }

    public function renderStatistics($data){
        require_once ("app/view/statistics_admin.php");
    }

    public function getStatistics(){
        $this->data['dstk']=$this->statistics->getBillStatistics();
        $this->renderStatistics($this->data);
    }

}

?>