<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['user'])){
        $_SESSION['user'] = [];
    }
    
    include_once 'app/model/User.php';
    include_once 'app/controller/UserController.php';
    require_once('app/model/data.php');
    require_once('app/model/product.php');
    require_once('app/model/category.php');
    require_once('app/model/bill.php');
    require_once('app/model/statistics.php');
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
    require_once('app/controller/donHangController.php');

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

            case'addUser':
                $adduser = new UserController();
                $adduser->addUser();
                break;

            case "donhang":
                $bill= new billController();
                $bill->getBill();
            break;    
            // case "guimail":
            //     $emailUser= new UserController();
            //     $emailUser->getEmail();
            // break;
            
            case "addBillCart":
                $addbill=new billController();
                $addbill->addBill();
            break;
            case "lichsumua":require_once('app/view/lichSuMua.php');
            break;
            case "account":
                $dangnhap = new UserController();
                $dangnhap->viewAccount();
                $dangnhap->renderView('account');
                break;
            case "logout":
                $dangnhap = new UserController();
                $dangnhap->Logout();
                break;    
            case "account":require_once('app/view/account.php');
                break;
            
            default:
            $body=new body();
            $body->getProductBody();
            ;
            break;
        };
    }elseif (isset($_GET['search'])) { // Xử lý khi URL có `search`
            $keyword = trim($_GET['search']);
            if ($keyword) {
                $sql = "SELECT * FROM sanpham WHERE name LIKE :keyword";
                try {
                    // Sửa lại gọi query và fetchAll
                    $stmt = $db->query($sql, ['keyword' => "%$keyword%"]);
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                    // Kiểm tra xem có kết quả nào không
                    if ($results === false || count($results) == 0) {
                        echo "Không tìm thấy sản phẩm nào với từ khóa: '$keyword'.";
                    } else {require_once('app/view/searchResult.php'); // Hiển thị kết quả tìm kiếm
                    }
                } catch (PDOException $e) {
                    // Xử lý lỗi khi truy vấn không thành công
                    echo "Lỗi khi thực hiện truy vấn: " . $e->getMessage();
                }
            } else {
                echo "Vui lòng nhập từ khóa để tìm kiếm.";
            }
    }else{
        
        $body=new body();
        $body->getProductBody();
        ;
    }
    require_once ('app/view/footer.php');

?>