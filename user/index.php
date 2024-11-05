<?php
    require_once ('app/view/header.php');
    if(isset($_GET['page'])&& $_GET['page'] ){
        switch($_GET['page']){
            case 'menu1':require_once('app/view/menu1.php');
            break;
            case 'menu2':require_once('app/view/menu2.php');
            break;
            case "detail":require_once('app/view/detail.php');
            break;
            case "store":require_once('app/view/store.php');
            break;

            default:require_once('app/view/body.php');
            break;
        };
    }else{
        require_once('app/view/body.php');
    }
    require_once ('app/view/footer.php');



?>