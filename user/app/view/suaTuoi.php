<!-- <header>
            <div id="mb__header-page">
                <div class="mb__header-page-all js-mb-header-all">
                    <div class="mb__header-page__close js-mb-close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <ul>
                        <li><a class="" href="index.php">TRANG CHỦ</a></li>
                        <li><a class="active-head" href="index.php?page=menu1">SẢN PHẨM</a></li>
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
                            <div class="mb__header-page__login ">
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
                    <li><a class="" href="index.php">Trang chủ</a></li>
                    <li><a class="active-head" href="index.php?page=menu1">Sản phẩm</a></li>
                    <li><a class="" href="index.php?page=store">Cửa hàng</a></li>
                    <li><a class="" href="index.php?page=news">Tin tức</a></li>
                    <li><a class="" href="index.php?page=contact">Liên hệ</a></li>
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
                        <div class="header-page__info__login">
                            <span><i class="fa-solid fa-user"></i></span>
                            <h3 style="margin-left: 5px;">Đăng nhập</h3>
                        </div>
                    </a>
                </div>
            </div>
</header> -->


<?php
$listCategory = $data['dsdm'];
function showCate($listCategory){
    foreach($listCategory as $values){
        extract($values);
        echo'
        <li><a class="content-page__all__nav__about-list" href="'.$link_category.'">'.$name_dm.'</a></li>
        ';
    }
}

$listSp = $data['dssp'];
  function showSp($listSp){
    foreach($listSp as $value){
        extract($value);
        echo '
          <a href="index.php?page=detail&&id='.$id_sanpham.'">
            <div class="content-page__all__nav__list__product">
                <img src="img/'.$image.'" alt="">
                <input type="hidden" name="image" value="'.$image.'">
                <div class="content-page__all__nav__list__product__name">
                    '.$name.'
                <input type="hidden" name="name_product" value="'.$name.'">
                </div>
                <div class="content-page__all__nav__list__product__row"></div>
                <div class="content-page__all__nav__list__product__info-name">
                    Đậm đà
                </div>
                <div class="content-page__all__nav__list__product__topping">
                    Chưa có topping
                </div>
                <div class="content-page__all__nav__list__product__price-money">
                    <div class="content-page__all__nav__list__product__price-money__price">
                        Giá
                    </div>
                    <div class="content-page__all__nav__list__product__price-money__money">
                    '.$price.'đ
                <input type="hidden" name="price_sale" value="'.$price_sale.'">
                <input type="hidden" name="price" value="'.$price.'">
                    </div>
                </div>
                <div class="content-page__all__nav__list__product__buy">
                    <input type="submit" value="Mua" name="buy-product">
                </div>
            </div>
        </a>
        ';
    }
  }



?>
           <!-- Begin content -->
           <div id="content">
            <div id="content-page__all">
                <div class="content-page__all__col-info">
                    <div class="col"></div>
                    <div class="info">SẢN PHẨM</div>
                </div>
                <div class="content-page__all__nav">
                    <ul>
                        <!-- <li><a class="content-page__all__nav__about-list " href="index.php?page=bestseller">Best Seller</a></li>
                        <li><a class="content-page__all__nav__about-list " href="index.php?page=bocollection">Bơ Collection</a></li>
                        <li><a class="content-page__all__nav__about-list " href="index.php?page=trasua">Trà sữa</a></li>
                        <li><a class="content-page__all__nav__about-list " href="index.php?page=trathanhnhiet">Trà Thanh Nhiệt</a></li>
                        <li><a class="content-page__all__nav__about-list " href="index.php?page=tranguyenvi">Trà Nguyên Vị</a></li>
                        <li><a class="content-page__all__nav__about-list active-nav" href="#">Sữa Tươi</a></li> -->
                        <?php
                            showCate($listCategory);
                        ?>
                    </ul>
                    <h2>SỮA TƯƠI</h2>
                    <div class="content-page__all__nav__list">
                        <?php
                            showSp($listSp);
                        ?>
                       
                     
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    

        <!-- End content -->

