<?php
    require_once('app/view/header_admin.php');
    if(isset($_GET['page'])&& $_GET['page']){
        switch($_GET['page']){
            case 'product':require_once('app/view/product_admin.php');
            break;
            case 'fix_product_admin':require_once('app/view/fix_product_admin.php');
            break;

            case 'category':require_once('app/view/category_admin.php');
            break;
            case 'fix_category_admin':require_once('app/view/fix_category_admin.php');
            break;

            default:require_once('app/view/main.php');
            break;
        };
    }else{
        require_once('app/view/main.php');
    }



?>