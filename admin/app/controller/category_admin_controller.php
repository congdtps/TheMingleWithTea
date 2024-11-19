<?php
    class categoryAdmin{
        private $category;
        private $data;

        public function __construct(){
            $this->category=new category();
        }

        public function renderCategory($cate,$data=null){
            $cate='app/view/'.$cate.'.php';
            require_once($cate);
        }

        public function getCate(){
            $this->data['cate']=$this->category->getCate();
            $this->renderCategory('category_admin',$this->data);
        }


        public function addCate(){
            if((isset($_POST['add-cate']))&& $_POST['add-cate']){
            $data=[];
            $data['id_dm']=$_POST['id_dm'];
            $data['name_dm']=$_POST['name_dm'];
            $data['link_category']=$_POST['link_category'];
            $data['created_at']=$_POST['created_at'];
            $this->category->insertCate($data);
            }
            echo'
            <script>location.href="index.php?page=category"</script>
            
            ';
        }

        public function deleCate(){
            if((isset($_GET['id']))&& $_GET['id']>0 ){
                $id=$_GET['id'];
             
                $this->category->delCate($id);
            }
            echo'
            <script>location.href="index.php?page=category"</script>
            
            ';

        }




    }


?>