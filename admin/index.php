<?php
    require_once('../user/app/model/data.php');
    require_once('../user/app/model/product.php');
    require_once('../user/app/model/category.php');
    require_once('app/controller/bill_admin_controller.php');
    require_once('app/controller/category_admin_controller.php');
    require_once('app/controller/fix_bill_admin_controller.php');
    require_once('app/controller/fix_category_admin_controller.php');
    require_once('app/controller/fix_personnel_admin_controller.php');
    require_once('app/controller/fix_product_admin_controller.php');
    require_once('app/controller/main_controller.php');
    require_once('app/controller/personnel_controller.php');
    require_once('app/controller/product_admin_controller.php');
    
    require_once('app/view/header_admin.php');
    $db= new data();
    if(isset($_GET['page'])&& $_GET['page']){
        switch($_GET['page']){
            case 'product':
                $product_admin=new productAdmin();
                $product_admin->getPorudct();
            break;
            case 'add':
                $product_admin=new productAdmin();
                $product_admin->addProductAdmin();
            case 'fix_product_admin':require_once('app/view/fix_product_admin.php');
            break;

            case 'del':
                $product_admin=new productAdmin();
                $product_admin->deleProductAdmin();
            case 'category':
                $cateAdmin=new categoryAdmin();
                $cateAdmin->getCate();
            break;
            case 'addCate':
                $cateAdmin=new categoryAdmin();
                $cateAdmin->addCate();
            break;
            case 'deleCate':
                $cateAdmin=new categoryAdmin();
                $cateAdmin->deleCate();
            break;
            case 'fix_category_admin':require_once('app/view/fix_category_admin.php');
            break;
            case 'bill_admin':require_once('app/view/bill_admin.php');
            break;
            case 'fix_bill_admin':require_once('app/view/fix_bill_admin.php');
            break;
            case 'personnel_admin':require_once('app/view/personnel_admin.php');
            break;
            case 'fix_personnel_admin':require_once('app/view/fix_personnel_admin.php');
            break;


            default:require_once('app/view/main.php');
            break;
        };
    }else{
        require_once('app/view/main.php');
    }



?>