<?php
    class billController{
        private $data;
        private $bill;

        public function __construct(){
            $this->bill=new bill();
        }


        public function renderBill($data){
            require_once('app/view/donHang.php');
        }

        public function getBill(){
            $this->data['dsbill']=$this->bill->getBillAll();
            $this->renderBill($this->data);
        }


        public function addBill(){
            if((isset($_POST['buy-check']))&& $_POST['buy-check']){
            $data=[];
            $data['trangthai']=$_POST['trangthai'];
            $data['address']=$_POST['detail-address-user'];
            $data['phone']=$_POST['phone'];
            $data['total']=$_POST['total_all'];
            $data['id_pttt']=$_POST['method-pay'];
            $data['id_user']=$_POST['id_user'];
            $data['id_nv']=$_POST['id_nv'];
            $this->bill->insertBill($data);
            }
            echo'
            <script>location.href="index.php?page=donhang"</script>
            
            ';
        }

       

    }



?>