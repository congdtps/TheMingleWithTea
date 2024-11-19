<?php
    class mainAdmin{
        private $user;
        private $data;

        public function __construct(){
            $this->user=new UserModel();
        }
        
        

        public function renderUserAdmin($user,$data=null){
            $user='app/view/'.$user.'.php';
            require_once($user);
        }


        public function getUserAdmin(){
            $this->data['dsuser']=$this->user->getUser();
            $this->renderUserAdmin('main',$this->data);
        }



        public function addUserAdmin(){
            if((isset($_POST['add-user']))&& $_POST['add-user']){
            $data=[];
            $data['id_user']=$_POST['id_user'];
            $data['name_user']=$_POST['name_user'];
            $data['email']=$_POST['email'];
            $data['password_user']=$_POST['password_user'];
            $data['role']=$_POST['role'];
            $this->user->inserUserAdmin($data);
            }
            echo'
            <script>location.href="index.php?page=main"</script>
            
            ';
        }

        public function deleUserAdmin(){
            if((isset($_GET['id']))&& $_GET['id']>0 ){
                $id=$_GET['id'];
                // $data= $this->catalog->
                $this->user->delUser($id);
            }
            echo'
            <script>location.href="index.php?page=main"</script>
            
            ';

        }

    
    }



?>