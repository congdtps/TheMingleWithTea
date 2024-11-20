<?php
    class fixBilAdmin{
        private $data;
        private $bill;

        public function __construct(){
            $this->bill=new bill();
        }


        public function showUpdateIdBill($data){
            extract($data);
            require_once('app/view/fix_bill_admin.php');
        }

        public function getUpdateIdBill(){
            if((isset($_GET['id'])) && ($_GET['id'])){
                foreach($this->bill->getBillAll() as $value){
                    if($value['id_dh']==$_GET['id']){
                        $this->data=$value;
                    }
                }
                return $this->showUpdateIdBill($this->data);
            }
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
        public function UpdateIdBill(){
            if((isset($_POST['updateBillAdmin']))&& $_POST['updateBillAdmin']){
                $id=$_POST['id_dh'];
                $data=[];
                $data['trangthai']=$_POST['trangthai'];
                $data['address']=$_POST['address'];
                $data['phone']=$_POST['phone'];
                $data['id_nv']=$_POST['id_nv'];
                $this->bill->updateBill($id,$data);
                }
                echo'
                <script>location.href="index.php?page=bill_admin"</script>
                
                ';
        }

       

    }



?>