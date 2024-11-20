<?php
    class personnelAdmin{
        private $personnel;
        private $data;
    
        public function __construct() {
            $this->personnel = new personnel(); 
        }
    
        public function renderpersonnel($personnel, $data = null) {
            $personnel = 'app/view/' . $personnel . '.php';
            require_once($personnel);
        }
        public function getPersonnel(){
            $this->data['personnel']=$this->personnel->getpersonnel();
            $this->renderpersonnel('personnel_admin',$this->data);
        }
    
        public function addPersonnelAdmin(){
            if((isset($_POST['addpersonnel']))&& $_POST['addpersonnel']){
            $data=[];
            $data['id_nv']=$_POST['id_nv'];
            $data['name_nv']=$_POST['name_nv'];
            $data['email']=$_POST['email'];
            $data['password']=$_POST['password'];
            $data['role']=$_POST['role'];
            $this->personnel->insertPersonnel($data);
            }
            echo'
            <script>location.href="index.php?page=personnel_admin"</script>
            
            ';
        }
        public function deletePersonnelAdmin(){
            if((isset($_GET['id']))&& $_GET['id']>0  ){
                $id=$_GET['id'];
             
                $this->personnel->delPersonnel($id);
            }
            echo'
            <script>location.href="index.php?page=personnel_admin"</script>
            
            ';

        }
       


    }
    

?>