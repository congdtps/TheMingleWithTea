<?php
    class fixPersonnelAdmin{
        private $personnel;
        private $data;

        public function __construct(){
            $this->personnel=new personnel();
        }


        public function showUpdateIdPersonnel($data){
            extract($data);
            require_once('app/view/fix_personnel_admin.php');
        }


        public function getUpdateIdPersonnel(){
            if((isset($_GET['id'])) && ($_GET['id'])){
                foreach($this->personnel->getpersonnel() as $value){
                    if($value['id_nv']==$_GET['id']){
                        $this->data=$value;
                    }
                }
                return $this->showUpdateIdPersonnel($this->data);
            }
        }


        
        public function UpdateIdPersonnel(){
            if((isset($_POST['updatepersonnel']))&& $_POST['updatepersonnel']){
                $id=$_POST['id_nv'];
                $data=[];
                $data['id_nv']=$_POST['id_nv'];
                $data['name_nv']=$_POST['name_nv'];
                $data['email']=$_POST['email'];
                $data['password']=$_POST['password'];
                $data['role']=$_POST['role'];
                $this->personnel->uploadPersonnel($id,$data);
                }
                echo'
                <script>location.href="index.php?page=personnel_admin"</script>
                
                ';
        }
        
        
        


    }


?>