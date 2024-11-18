<?php
    class fixCateAdmin{
        private $cate;
        private $data;

        public function __construct(){
            $this->category=new category();
        }


        public function showUpdateIdCate($data){
            extract($data);
            require_once('app/view/fix_category_admin.php');
        }


        public function getUpdateIdCate(){
            if((isset($_GET['id'])) && ($_GET['id'])){
                foreach($this->category->getCate() as $value){
                    if($value['id_dm']==$_GET['id']){
                        $this->data=$value;
                    }
                }
                return $this->showupdateIdCate($this->data);
            }
        }


        public function UpdateIdCate(){
            if((isset($_POST['updateCate_Admin']))&& $_POST['updateCate_Admin']){
                $id=$_POST['id_dm'];
                $data=[];
                $data['id_dm']=$_POST['id_dm'];
                $data['name_dm']=$_POST['name_dm'];
                $data['link_category']=$_POST['link_category'];
                $data['created_at']=$_POST['created_at'];
                $this->category->uploadPro($id,$data);
                }
                echo'
                <script>location.href="index.php?page=category"</script>
                
                ';
        }
        


    }


?>