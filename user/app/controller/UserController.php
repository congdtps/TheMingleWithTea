<?php
 class UserController{
    private $user;
    private $data;
    function __construct()
    {
        $this -> user=new UserModel();
    }
    function renderView($view,$data=null){
        $view = './app/view/'.$view.'.php';
        require_once $view;
    }

    function renderView_admin($view,$data=null){
        $view = '../admin/'.$view.'.php';
        require_once $view;
    }

    function viewSingin(){
        $this->renderView('dangnhap');
    }


    public function getEmail(){
        $this->data['dsuser']=$this->user->getUser();
        $this->renderView('donHang',$this->data);
    }


    // function checkAdmin(){
    //     if(isset($_POST['sub']) && $_POST['sub']){
    //         $user = $_POST['name'];
    //         $pass = $_POST['pass'];
    //         // echo $user,$pass;
    //         $result = $this->user->checkUser($user, $pass);
    //         if(is_array($result)){
    //             if($result['role'] == 1){
    //                 $_SESSION['admin'] = $result['name_user'];
    //                 // header('Location: ./admin/index.php');
    //                 return $this->renderView_admin('index');
    //             }
    //         } else {
    //             echo '<script> alert("Sai tên đăng nhập hoặc mật khẩu")</script>';
    //             echo '<script>location.href="index.php?page=dangNhap"</script>';
    //         }
    //     }
    // }

    function Logout(){
        unset($_SESSION['user']);
        header('location:index.php?page=dangnhap');
      
        
    }


    function check(){
        if(isset($_POST['sub']) && $_POST['sub']){
            $user = $_POST['name'];
            $pass = $_POST['pass'];
            echo $user,$pass;
            $result = $this->user->checkUser($user, $pass);
            if(is_array($result)){
                if($result['role'] == 2){
                    $_SESSION['user'] = $result;
                    
                    header('location:index.php?page=account');
                    // return $this->renderView('account');

                    // echo '<script> alert("Đăng nhập thành công")</script>';
                }else{
                    $_SESSION['admin'] = $result;
                    header('Location: ../admin/index.php?page=main');
                    // return $this->renderView_admin('index');
                }
            } else {
                echo '<script> alert("Sai tên đăng nhập hoặc mật khẩu")</script>';
                echo '<script>location.href="index.php?page=dangnhap"</script>';
            }
        }
    }
    
    function viewResgin(){
        $this->renderView('dangki');
    }
    // function addUser(){
    //     if(isset($_POST['sub'])){
    //         $data = [];
    //         // $data['name'] = $_POST['name'];
    //         $data['email'] = $_POST['email'];
    //         $data['pass'] = $_POST['pass'];
    //         $repass = $_POST['repass'];
    //         if($data['pass'] === $repass){
    //             $result = $this->user ->checkmail($data['email']);
    //             if($result){
    //                 echo '<script> alert("Email đã tồn tại")</script>';
    //                 echo '<script>location.href="index.php?page=dangKi"</script>';
    //             }else{
    //                 $this->user->inserUser($data);
    //                 echo '<script> alert("Đăng kí thành công")</script>';
    //                 echo '<script>location.href="index.php?page=dangNhap"</script>';
    //             }
    //         }else{
    //             echo '<script> alert("Mật khẩu không trùng khớp")</script>';
    //             echo '<script>location.href="index.php?page=dangKi"</script>';
    //         }
    //     }
    // }

  

    function addUser(){
        if((isset($_POST['btn-res']))&& $_POST['btn-res']){
            $data=[];
            $data['name_user']=$_POST['name_user'];
            $data['email']=$_POST['email'];
            $data['password_user']=$_POST['password_user'];
            $this->user->inserUser($data);}
            
            echo'
            <script>location.href="index.php?page=dangnhap"</script>
            
            ';
            
    }
    function viewAccount() {
        if (isset($_SESSION['user'])) {
            print_r($_SESSION['user']);
            $data = $_SESSION['user'];
            $this->renderView('account', $data);
        } else {
            echo '<script>alert("Bạn chưa đăng nhập!"); location.href="index.php?page=dangnhap";</script>';
        }
    }
}


?>