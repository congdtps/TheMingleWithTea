<?php
    class productAdmin{
        private $product;
        private $data;

        public function __construct(){
            $this->product= new product();
        }

        public function renderProduct($product,$data=null){
            $product='app/view/'.$product.'.php';
            require_once($product);
        }

        public function getPorudct(){
            $this->data['product']=$this->product->getPro(4);
            $this->renderProduct('product_admin',$this->data);
        }

        public function addProductAdmin(){
            if((isset($_POST['add'])) && $_POST['add'] ){
                $data=[];
                $data['name']=$_POST['name'];
                $data['price']=$_POST['price'];
                $data['price_sale']=$_POST['price_sale'];
                $data['id_danhmuc']=$_POST['id_danhmuc'];
                $data['image']=$_FILES['image']['name'];
                $file="../user/img/".$data['image'];
                move_uploaded_file($_FILES['image']['tmp_name'],$file);
                $this->product->insertPro($data);
            }
            echo'
            <script>location.href="index.php?page=product"</script>
            ';
        }


        public function deleProductAdmin(){
            if((isset($_GET['id'])) && $_GET['id']>0){
                $id=$_GET['id'];
                $data=$this->product->getId($id);
                $file="../user/img/".$data['image'];
                unlink($file);
                $this->product->delePro($id);
            }
            echo'
            <script>location.href="index.php?page=product"</script>
            ';
        }


    }


?>