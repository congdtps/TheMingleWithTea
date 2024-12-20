<?php
    require_once('../user/app/model/data.php');
    require_once('../user/app/model/product.php');
    require_once('../user/app/model/category.php');
    require_once('../user/app/model/User.php');
    require_once('../user/app/model/bill.php');
    require_once('../user/app/model/personnel.php');
    require_once('../user/app/model/statistics.php');
    require_once('app/controller/bill_admin_controller.php');
    require_once('app/controller/category_admin_controller.php');
    require_once('app/controller/fix_bill_admin_controller.php');
    require_once('app/controller/fix_category_admin_controller.php');
    require_once('app/controller/fix_personnel_admin_controller.php');
    require_once('app/controller/fix_product_admin_controller.php');
    require_once('app/controller/fix_admin_controller.php');
    require_once('app/controller/main_controller.php');
    require_once('app/controller/personnel_controller.php');
    require_once('app/controller/product_admin_controller.php');
    require_once('app/controller/statistics_controller.php');
    
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
            case 'fix_product_admin':
                $fixProductAdmin=new fixProductAdmin();
                $fixProductAdmin->getUpdateIdProduct();
            break;
            case 'updateProduct':
                $fixProductAdmin=new fixProductAdmin();
                $fixProductAdmin->UpdateIdProduct();
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
            case 'fix_category_admin':
                $fixCateAdmin=new fixCateAdmin();
                $fixCateAdmin->getUpdateIdCate();
            break;
            case'updateCate':
                $fixCateAdmin=new fixCateAdmin();
                $fixCateAdmin->UpdateIdCate();
            break;
            case 'bill_admin':
                $bill=new billAdmin();
                $bill->getBill();
            break;

            case "delBill":
                $delBill=new billAdmin();
                $delBill->deleBill();
            break;

            case 'fix_bill_admin':
                $fixBill= new fixBilAdmin();
                $fixBill->getUpdateIdBill();
            break;

            case "updateBill":
                $updateBill= new fixBilAdmin();
                $updateBill->UpdateIdBill();
            break;


            case 'personnel_admin':
                $personnel= new personnelAdmin();
                $personnel->getPersonnel(); 
            break;
            case "addNV":
                $personnel= new personnelAdmin();
                $personnel->addPersonnelAdmin();
            break;
            case "deleteNV":
                $personnel=new personnelAdmin();
                $personnel->deletePersonnelAdmin();
            break;
            case 'fix_personnel_admin':
                $fixpersonnel= new fixPersonnelAdmin();
                $fixpersonnel->getUpdateIdPersonnel();
            break;

            case "updateNV":
                $fixUpdatePersonnel = new fixPersonnelAdmin();
                $fixUpdatePersonnel->UpdateIdPersonnel();
            break;
           
            case 'addMainUser':
                $addUser=new mainAdmin();
                $addUser->addUserAdmin();
            break;

            case 'delUser':
                $delUser=new mainAdmin();
                $delUser->deleUserAdmin();
            break;

            case 'fix_main':
                $fixUser= new fixUserAdmin();
                $fixUser->getUpdateIdUser();
            break;

            case 'updateUser':
                $uploadUser=new fixUserAdmin();
                $uploadUser->UpdateIdUser();
                break;

            case "main":
                $mainUser=new mainAdmin();
                $mainUser->getUserAdmin();
            break;

            case "statistics":
                $stat=new statisticsController();
                $stat->getStatistics();
            break;

            default:
            $mainUser=new mainAdmin();
            $mainUser->getUserAdmin();
            break;
        };
    }else{
        require_once('app/view/main.php');
    }



?>