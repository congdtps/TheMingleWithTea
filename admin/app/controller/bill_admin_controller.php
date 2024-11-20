<?php
    class billAdmin{
        private $bill;
        private $data;
    
        public function __construct(){
            $this->bill=new bill();
        }


        public function renderBill($bill,$data=null){
            require_once("app/view/bill_admin.php");
        }


        public function getBill(){
            $this->data['dsbill']=$this->bill->getBillAll();
            $this->renderBill("bill_admin",$this->data);
        }

        public function deleBill(){
            if((isset($_GET['id']))&& $_GET['id']>0 ){
                $id=$_GET['id'];
             
                $this->bill->delBill($id);
            }
            echo'
            <script>location.href="index.php?page=bill_admin"</script>
            
            ';

        }
    
    }





?>