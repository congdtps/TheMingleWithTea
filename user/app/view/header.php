<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="upload/css/index.css">
    
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
    <link rel="stylesheet" href="front/fontawesome-free-6.5.2-web/css/all.css">
</head>
<body>
    <!-- Khải Khoa làm ở đây nha cu -->
     <!-- Nhớ comment khi làm nha -->
    <div id="main">
    <header>
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
                        <?php
                    if(empty($_SESSION['user'])){

                        echo'
                        <a href="index.php?page=dangnhap">
                            <div style="display:flex" class=""mb__header-page__login">
                                <span><i class="fa-solid fa-user"></i></span>
                                <h3 style="margin-left: 5px;">Đăng nhập</h3>
                            </div>
                        </a>
                        ';
                    }else{
                        echo'<a href="index.php?page=account">
                                <div style="display:flex" class=""mb__header-page__login">
                                    <span><i class="fa-solid fa-user"></i></span>
                                    <h3 style="margin-left: 5px;">Thành Công</h3>
                                </div>
                            </a>';
                    }
                


                    ?>
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
                <form method="GET" action="index.php?page=search">
                <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <span type="submit"><i class="fa-solid fa-magnifying-glass"></i></span>
                </form>
                </div>
                <div class="header-page__info">
                    <a href="index.php?page=cart">
                        <div class="header-page__info__cart">
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                            <h3 style="margin-left: 5px;">Giỏ hàng</h3>
                        </div>
                    </a>
                    <?php
                    if(empty($_SESSION['user'])){
                       
                        echo'
                        <a href="index.php?page=dangnhap">
                            <div class="header-page__info__login">
                                <span><i class="fa-solid fa-user"></i></span>
                                <h3 style="margin-left: 5px;">Đăng nhập</h3>
                            </div>
                        </a>
                        ';
                    }else{
                        echo'<a href="index.php?page=account">
                                <div class="header-page__info__login">
                                    <span><i class="fa-solid fa-user"></i></span>
                                    <h3 style="margin-left: 5px;">Xin chào</h3>
                                </div>
                            </a>';
                    }
                


                    ?>
                   
                </div>
            </div>
</header>
        <!-- Begin header -->
      
        <!-- End header -->