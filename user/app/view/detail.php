

<header>
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
                            <div class="mb__header-page__login">
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
        </header>
 
 <!-- Begin content -->
 <div id="content">
            <div id="content-detail">
                <a href="index.php?page=menu1">
                    <div class="content-deatail__back">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                </a>
                <?php
                if($price_sale){
                echo'
            <form action="index.php?page=cart" method="post">
                <div class="content-detail__all-product__all">
                    <article>
                        <div class="content-detail__all-product__img-large">
                            <img src="img/'.$image.'" alt="">
                            <input type="hidden" name="image" value="'.$image.'">
                        </div>
                        <div class="content-detail__all-product__img-small">
                            <img src="img/'.$image.'" alt="">
                        </div>
                    </article>

                    <aside>
                            <div class="content-detail__all-product-info">
                                <h2>'.$name.'</h2>
                                <input type="hidden" name="name-product" value="'.$name.'">
                                <div class="content-detail__all-product-info__all-price-detail">
                                <h3>'.$price_sale.'đ</h3>
                                 <del>'.$price.'đ</del>
                                </div>
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="price_sale" value="'.$price_sale.'">
                                <div class="content-detail__all-product-info__size">
                                    <p>Chọn size</p>
                                    <div class="content-detail__all-product-info__size__m active-size">
                                        M
                                    </div>
                                    <div class="content-detail__all-product-info__size__l">
                                        L
                                    </div>
                                </div>
                                <p style="color: #9C623C;margin-bottom: 10px;">Topping:</p>
                                <div class="content-detail__all-product-info__list-topping">
                                    <div class="content-detail__all-product-info__list-topping__topping">
                                        <p>Hạt Nổ Củ Năng</p>
                                        <p>7.000đ</p>
                                    </div>
                                    <div class="content-detail__all-product-info__list-topping__topping">
                                        <p>Hạt Đào</p>
                                        <p>5.000đ</p>
                                    </div>
                                    <div class="content-detail__all-product-info__list-topping__topping">
                                        <p>Trân Châu Trắng</p>
                                        <p>6.000đ</p>
                                    </div>
                                    <div class="content-detail__all-product-info__list-topping__topping">
                                        <p>Thạch Chocolate</p>
                                        <p>7.000đ</p>
                                    </div>
                                    <div class="content-detail__all-product-info__list-topping__topping">
                                        <p>Thạch Sợi</p>
                                        <p>5.000đ</p>
                                    </div>
                                    <div class="content-detail__all-product-info__list-topping__topping">
                                        <p>Bánh Flan</p>
                                        <p>7.000đ</p>
                                    </div>
    
                                </div>
                                <div class="content-detail__all-product-info__buy">
                                    <input type="submit" value="Mua" name="buy-product">
                                </div>
                            </div>
                            
                            
                            
                    </aside>
                </div>
            </form>
                ';}else{
                    echo'
                    <form action="index.php?page=cart" method="post">
                        <div class="content-detail__all-product__all">
                            <article>
                                <div class="content-detail__all-product__img-large">
                                    <img src="img/'.$image.'" alt="">
                                    <input type="hidden" name="image" value="'.$image.'">
                                </div>
                                <div class="content-detail__all-product__img-small">
                                    <img src="img/'.$image.'" alt="">
                                </div>
                            </article>
        
                            <aside>
                                    <div class="content-detail__all-product-info">
                                        <h2>'.$name.'</h2>
                                        <input type="hidden" name="name-product" value="'.$name.'">
                                        <div class="content-detail__all-product-info__all-price-detail">
                                        <h3>'.$price.'đ</h3>
                                        <input type="hidden" name="quantity" value="1">
                                        </div>
                                       
                                        <input type="hidden" name="price" value="'.$price.'">
                                        <div class="content-detail__all-product-info__size">
                                            <p>Chọn size</p>
                                            <div class="content-detail__all-product-info__size__m active-size">
                                                M
                                            </div>
                                            <div class="content-detail__all-product-info__size__l">
                                                L
                                            </div>
                                        </div>
                                        <p style="color: #9C623C;margin-bottom: 10px;">Topping:</p>
                                        <div class="content-detail__all-product-info__list-topping">
                                            <div class="content-detail__all-product-info__list-topping__topping">
                                                <p>Hạt Nổ Củ Năng</p>
                                                <p>7.000đ</p>
                                            </div>
                                            <div class="content-detail__all-product-info__list-topping__topping">
                                                <p>Hạt Đào</p>
                                                <p>5.000đ</p>
                                            </div>
                                            <div class="content-detail__all-product-info__list-topping__topping">
                                                <p>Trân Châu Trắng</p>
                                                <p>6.000đ</p>
                                            </div>
                                            <div class="content-detail__all-product-info__list-topping__topping">
                                                <p>Thạch Chocolate</p>
                                                <p>7.000đ</p>
                                            </div>
                                            <div class="content-detail__all-product-info__list-topping__topping">
                                                <p>Thạch Sợi</p>
                                                <p>5.000đ</p>
                                            </div>
                                            <div class="content-detail__all-product-info__list-topping__topping">
                                                <p>Bánh Flan</p>
                                                <p>7.000đ</p>
                                            </div>
            
                                        </div>
                                        <div class="content-detail__all-product-info__buy">
                                            <input type="submit" value="Mua" name="buy-product">
                                        </div>
                                    </div>
                                    
                                    
                                    
                            </aside>
                        </div>
                    </form>
                        ';
                }

                ?>
            

                <div class="content-detail__diff-product">
                    <div class="content-detail__diff-product__col-info">
                        <div class="content-detail__diff-product__col-info__col">

                        </div>
                        <div class="content-detail__diff-product__col-info__info">
                            Sản phẩm khác
                        </div>
                    </div>
                    <div class="content-detail__diff-product__list-product-diff">
                    <?php
                            // showListProductDiff($listProductDiff);
                    ?>
                        <a href="index.php?page=detail">
                            <div class="content-page__all__nav__list__product">
                                <img src="img/sp2.png" alt="">
                                <div class="content-page__all__nav__list__product__name">
                                    Trà sữa Kem Trứng 
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
                                        25000đ
                                    </div>
                                </div>
                                <div class="content-page__all__nav__list__product__buy">
                                    <input type="submit" value="Mua">
                                </div>
                            </div>
                        </a>
                        <a href="index.php?page=detail">
                            <div class="content-page__all__nav__list__product">
                                <img src="img/sp3.png" alt="">
                                <div class="content-page__all__nav__list__product__name">
                                    Trà sữa Sunday
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
                                        35000đ
                                    </div>
                                </div>
                                <div class="content-page__all__nav__list__product__buy">
                                    <input type="submit" value="Mua">
                                </div>
                            </div>
                        </a>
                        <a href="index.php?page=detail">
                            <div class="content-page__all__nav__list__product">
                                <img src="img/sp5.png" alt="">
                                <div class="content-page__all__nav__list__product__name">
                                    Trà sữa Truyền Thống
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
                                        17000đ
                                    </div>
                                </div>
                                <div class="content-page__all__nav__list__product__buy">
                                    <input type="submit" value="Mua">
                                </div>
                            </div>
                        </a>
                        <a href="index.php?page=detail">
                            <div class="content-page__all__nav__list__product">
                                <img src="img/sp6.png" alt="">
                                <div class="content-page__all__nav__list__product__name">
                                    Trà sữa Chocolate
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
                                        22000đ
                                    </div>
                                </div>
                                <div class="content-page__all__nav__list__product__buy">
                                    <input type="submit" value="Mua">
                                </div>
                            </div>
                        </a>
                        
                     
                    </div>
                </div>

            </div>

        </div>
        
    

        <!-- End content -->
