<body>
 
     <div id="main">

        <!-- Begin header -->
<!-- <header>
            <div id="mb__header-page">
                <div class="mb__header-page-all js-mb-header-all">
                    <div class="mb__header-page__close js-mb-close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <ul>
                        <li><a class="" href="index.php">TRANG CHỦ</a></li>
                        <li><a class="" href="index.php?page=menu1">SẢN PHẨM</a></li>
                        <li><a class="" href="index.php?page=store">CỬA HÀNG</a></li>
                        <li><a class="" href="index.php?page=news">TIN TỨC</a></li>
                        <li><a class="" href="index.php?page=contact">LIÊN HỆ</a></li>
                        <a href="index.php?page=cart">
                            <div class="mb__header-page__cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <p>Giỏ hàng</p>
                            </div>
                        </a>
                        <a href="index.php?page=dangnhap">
                            <div class="mb__header-page__login active-head">
                                <i class="fa-solid fa-user"></i>
                                <p>Đăng nhập</p>
                            </div>
                        </a>
                    </ul>
                </div>

            </div>
            
            <div id="header-page">
                <div id="js_menu_mb" class="mb__header-page__menu-nav">
                    <i style="font-size: 24px;" class="fa-solid fa-bars"></i>
                </div>
                <div class="header-page__logo">
                    <img src="img/__-removebg-preview.png" alt="">
                </div>
                <ul class="header-page__nav">
                        <li><a class="" href="index.php">TRANG CHỦ</a></li>
                        <li><a class="" href="index.php?page=menu1">SẢN PHẨM</a></li>
                        <li><a class="" href="index.php?page=store">CỬA HÀNG</a></li>
                        <li><a class="" href="index.php?page=news">TIN TỨC</a></li>
                        <li><a class="" href="index.php?page=contact">LIÊN HỆ</a></li>
                </ul>
                <div class="header-page__search">
                    <input type="text" name="" id="" placeholder="Trà sữa">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="header-page__info">
                    <a href="index.php?page=cart">
                        <div class="header-page__info__cart">
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                            <h3 style="margin-left: 5px;">Giỏ hàng</h3>
                        </div>
                    </a>
                    <a href="index.php?page=dangnhap">
                        <div class="header-page__info__login active-head">
                            <span><i class="fa-solid fa-user"></i></span>
                            <h3 style="margin-left: 5px;">Đăng nhập</h3>
                        </div>
                    </a>
                </div>
            </div>
</header> -->
        <!-- End header -->

        <!-- Begin content -->
       <?php
        $listBill=$data['dsbill'];
        foreach($listBill as $value){
            extract($value);
        }
            echo'
        <div class="notthing"></div>
        <div id="content-cover">
            <div class="content__icon">
                <div class="content__icon__box">
                    <div class="content__icon__box__cover">
                        <div class="content_icon__box__cover__img"><img src ="img/check.png" alt=""></div>
                    </div>
                    <div class="content__icon__box__cover-all">
                        <div class="content__icon__box__cover-all__box">
                            <div class="content__icon__box__cover-all__box__color-text">Thanh toán thành công</div>
                            <div class="content__icon__box__cover__bills-text">
                                <div class="content__icon__box__cover-all__box__color-text">Mã số đơn hàng của bạn là:</div>
                                <div class="content__icon__box__cover__bills-text__text">#DH'.$id_dh.' </div>
                            </div>
                            <div class="content__icon__box__cover__bills-text">
                                <div class="content__icon__box__cover-all__box__color-text">Để xem chi tiết mua hàng vui lòng</div>
                                <div class="content__icon__box__cover__bills-text__text"><a href="index.php?page=lichsumua&&id='.$id_dh.'">xem tại đây.</a></div>
                                
                            </div>
                            <div class="content__icon__box__cover-all__box__color-text">Thời gian dự kiến giao hàng là: 19/10/2024</div>
                            <div class="content__icon__box__cover-all__box__color-text">CẢM ƠN QUÝ KHÁCH ĐÃ ỦNG HỘ VÀ TIN TƯỞNG DỊCH VỤ </div>
                            <div class="content__icon__box__cover__bills-text__text-3">
                                <a href="index.php"><button>TIẾP TỤC MUA HÀNG</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ';
       ?>
    

        <!-- End content -->


      
    </div>
   
</body>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'congdtps40376@gmail.com'; 
    $mail->Password = 'rsqg uodf fwuc ryja'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;







    $mail->setFrom('congdtps40376@gmail.com', 'Mailer');
    $mail->addAddress('hungnhps40427@gmail.com','Thành Công');

    
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Xác nhận đơn hàng';
    
    $emailContent = "<h3>Thông tin chi tiết đơn hàng</h3>";
    $emailContent .= "<table border='1' cellspacing='0' cellpadding='5'>";
    $emailContent .= "
        <tr>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
        </tr>";
    
    $tongTien = 0;
    // print_r($_SESSION['cart']);
    foreach ($_SESSION['cart'] as $index => $item) {
        $tenSanPham = $item[0];
        $gia = isset($item[2]) ? $item[2] : $item[3];
        $soLuong = $item[4];
        $thanhTien = $gia * $soLuong;
        $tongTien += $thanhTien;
        $mail->addEmbeddedImage('./img/'.$item[1],$item[1]);
        $emailContent .= "
            <tr>
                <td>" . ($index + 1) . "</td>
                <td>" . $tenSanPham . "</td>
                <td><img src='cid:".$item[1]."' alt='" . $tenSanPham . "' style='width:100px;'></td>
                <td>" . number_format($gia, 0, ',', '.') . " đ</td>
                <td>" . $soLuong . "</td>
                <td>" . number_format($thanhTien, 0, ',', '.') . " đ</td>
            </tr>";  
    }

    $emailContent .= "
        <tr>
            <td colspan='5'><strong>Tổng Tiền</strong></td>
            <td><strong>" . number_format($tongTien, 0, ',', '.') . " đ</strong></td>
        </tr>
    </table>";
    
    $mail->Body = $emailContent;

    $mail->CharSet = 'UTF-8';
    $mail->send();
} catch (Exception $e) {
    echo "Không thể gửi email. Lỗi: {$mail->ErrorInfo}";
}
?>