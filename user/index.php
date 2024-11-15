<?php
    require_once('app/model/data.php');
    require_once('app/model/product.php');
    require_once('app/controller/bodyController.php');
    require_once('app/controller/menu1Controller.php');
    require_once('app/controller/menu2Controller.php');
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
            case 'bestseller':require_once('app/view/bestSeller.php');
            break;
            case 'bocollection':require_once('app/view/boCollection.php');
            break;
            case 'suatuoi':require_once('app/view/suaTuoi.php');
            break;
            case 'tranguyenvi':require_once('app/view/traNguyenVi.php');
            break;
            break;
            case 'trasua':require_once('app/view/traSua.php');
            break;
            break;
            case 'trathanhnhiet':require_once('app/view/traThanhNhiet.php');
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
            case "dangnhap":require_once('app/view/dangNhap.php');
            break;
            case "dangki":require_once('app/view/dangKi.php');
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