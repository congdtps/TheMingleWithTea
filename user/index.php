<?php
    session_start();
    ob_start();
    include_once 'app/model/User.php';
    include_once 'app/controller/UserController.php';
    require_once('app/model/data.php');
    require_once('app/model/product.php');
    require_once('app/model/category.php');
    require_once("app/controller/bodyController.php");
    require_once('app/controller/menu1Controller.php');
    require_once('app/controller/menu2Controller.php');
    require_once('app/controller/bestSellerController.php');
    require_once('app/controller/boCollectionController.php');
    require_once('app/controller/traThanhNhietController.php');
    require_once('app/controller/traNguyenViController.php');
    require_once('app/controller/traSuaController.php');
    require_once('app/controller/suaTuoiController.php');
    require_once('app/controller/cartController.php');
    require_once('app/controller/detailController.php');
    
    require_once ('app/view/header.php');
    $db = new data();

    if(isset($_GET['page'])&& $_GET['page'] ){
        switch($_GET['page']){
            case 'menu1':
                $menu1=new menu1();
                $menu1->getProduct_first();
            break;
            case 'menu2':
                $menu2=new menu2();
                $menu2->getProduct_second();
            break;
            break;
            case 'bestseller':
                $bestSeller=new bestSeller();
                $bestSeller->getBestSeller();
            break;
            case 'bocollection':
                $boCollection=new boCollection();
                $boCollection->getBoCollection();
            break;
            case 'trasua':
                $trasua=new traSua();
                $trasua->getTrasua();
            break;
            case 'suatuoi':
                $suatuoi=new suaTuoi();
                $suatuoi->getSuatuoi();
            break;
            case 'tranguyenvi':
                $tranguyevi=new traNguyenvi();
                $tranguyevi->getTranguyenvi();
            break;
          
            
            case 'trathanhnhiet':
                $trathanhnhiet=new traThanhnhiet();
                $trathanhnhiet->getTrathanhnhiet();
            break;
            case "detail":
                $detail=new detail();
                $detail->getIdDetailProudct();
                
            break;
            case "store":require_once('app/view/store.php');
            break;
            case "news":require_once('app/view/news.php');
            break;
            case "contact":require_once('app/view/contact.php');
            break;
            case "cart":
                $cart=new cart();
                $cart->showCart();
                
            break;
            case "dangnhap":
                $dangnhap = new UserController();
                $dangnhap->viewSingin();
                break;
            case 'checkUser':
                $user =new UserController();
                $user->check();
                 break;
            case "dangki":
                $dangki =new UserController();
                $dangki->viewResgin();
                break;
            case'adduser':
                $adduser = new UserController();
                $adduser->addUser();
                break;
            case "donhang":require_once('app/view/donHang.php');
            break;
            case "lichsumua":require_once('app/view/lichSuMua.php');
            break;
            case "account":require_once('app/view/account.php');
            break;


            default:
            $body=new body();
            $body->getProductBody();
            ;
            break;
        };
    }else{
        
        $body=new body();
        $body->getProductBody();
        ;
    }
    require_once ('app/view/footer.php');

    

?>