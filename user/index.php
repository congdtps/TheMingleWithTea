<?php
    require_once('app/model/data.php');
    require_once ('app/view/header.php');
    $db= new data();

    if(isset($_GET['page'])&& $_GET['page'] ){
        switch($_GET['page']){
            case 'menu1':require_once('app/view/menu1.php');
            break;
            case 'menu2':require_once('app/view/menu2.php');
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
            case "detail":require_once('app/view/detail.php');
            break;
            case "store":require_once('app/view/store.php');
            break;
            case "news":require_once('app/view/news.php');
            break;
            case "contact":require_once('app/view/contact.php');
            break;
            case "cart":require_once('app/view/cart.php');
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


            default:require_once('app/view/body.php');
            break;
        };
    }else{
        require_once('app/view/body.php');
    }
    require_once ('app/view/footer.php');



?>