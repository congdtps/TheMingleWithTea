<?php
    class fixProductAdmin{
        private $product;
        private $data;


        public function __construct(){
            $this->product= new product();
        }

        public function showUpdateIdProduct($data){
            extract($data);
            require_once('app/view/fix_product_admin.php');

        }

        public function getUpdateIdProduct(){
            if((isset($_GET['id'])) && ($_GET['id'])){
                foreach($this->product->getPro(4) as $value){
                    if($value['id_sanpham']==$_GET['id']){
                        $this->data=$value;
                    }
                }
                return $this->showUpdateIdProduct($this->data);
            }
        }


        public function UpdateIdProduct(){
            if((isset($_POST['updateProduct_Admin']))&& $_POST['updateProduct_Admin']){
                $id=$_POST['id_sanpham'];
                $data=[];
                $data['name']=$_POST['name'];
                $data['price']=$_POST['price'];
                $data['price_sale']=$_POST['price_sale'];
                $data['id_danhmuc']=$_POST['id_danhmuc'];
                $data['image']=$_FILES['image']['name'];
                $file="../user/img/".$data['image'];
                move_uploaded_file($_FILES['image']['tmp_name'],$file);
                $this->product->uploadPro($id,$data);
                }
                echo'
                <script>location.href="index.php?page=product"</script>
                
                ';
        }

       
    }


?>