<?php
    class fixUserAdmin{
        private $data;
        private $user;

        public function __construct(){
            $this->user= new UserModel();
        }


        public function showUpdateIdUser($data){
            extract($data);
            require_once('app/view/fix_main.php');
        }


        public function getUpdateIdUser(){
            if((isset($_GET['id'])) && ($_GET['id'])){
                foreach($this->user->getUser() as $value){
                    if($value['id_user']==$_GET['id']){
                        $this->data=$value;
                    }
                }
                return $this->showUpdateIdUser($this->data);
            }
        }


        public function UpdateIdUser(){
            if((isset($_POST['update_user']))&& $_POST['update_user']){
                $id=$_POST['id_user'];
                $data=[];
                $data['name_user']=$_POST['name_user'];
                $data['email']=$_POST['email'];
                $data['password_user']=$_POST['password_user'];
                $data['address']=$_POST['address'];
                $data['phone']=$_POST['phone'];
                $data['role']=$_POST['role'];
                $this->user->uploadUser($id,$data);
                }
                echo'
                <script>location.href="index.php?page=main"</script>
                
                ';
        }



    }

?>