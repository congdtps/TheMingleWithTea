<?php
    session_start();
    ob_start();
    if((!isset($_SESSION['cart']))) $_SESSION['cart']=[];
    if((isset($_GET['del']))&& $_GET['del']>=0 ) array_splice($_SESSION['cart'],$_GET['del'],1);


    if((isset($_POST['buy-product']))&& $_POST['buy-product']){
        $name_product= $_POST['name-product'];
        $image=$_POST['image'];
        $price=$_POST['price'];
        $price_sale=$_POST['price_sale'];
        $quantity=$_POST['quantity'];
        $flag=0;
        for($i=0;$i<count($_SESSION['cart']);$i++){
            if($_SESSION['cart'][$i][0] == $name_product){
                $flag=1;
                $quantity_new = $_SESSION['cart'][$i][4] + $quantity;
                $_SESSION['cart'][$i][4]=$quantity_new;
                break;
            }
        }
        if($flag==0){
            $cart_all=[$name_product,$image,$price,$price_sale,$quantity];
            $_SESSION['cart'][]=$cart_all;
        }
    }


    function showCart(){
    if((isset($_SESSION['cart']))&& is_array($_SESSION['cart'])){
        $total_all=0;
        $total=0;
        for($i=0;$i<count($_SESSION['cart']);$i++){
            if($_SESSION['cart'][$i][2]){
                $total_item_price=$_SESSION['cart'][$i][2] *  $_SESSION['cart'][$i][4];
                $total_all+=$total_item_price;
                echo'
                <form action="" method="post">
                    <div class="content__box__nav-cart mb__content__box__nav-cart">
                        <div class="content__box__nav-cart__check-cart content__box__nav-cart__check-cart__copy">
                            <input type="checkbox" name="" id="">
                            <div class="content__box__nav-cart__check-cart__img"><img src="img/'.$_SESSION['cart'][$i][1].'" alt=""></div>
                            <input type="hidden" name="image-cart" value="'.$_SESSION['cart'][$i][1].'">
                            <div class="content__box__nav-cart__check-cart__name">'.$_SESSION['cart'][$i][0].'</div>
                            <input type="hidden" name="name-product-cart" value="'.$_SESSION['cart'][$i][0].'">
                            </div>
                        <div class="content__box__nav-cart__pay-cart ">
                            <div class="content__box__nav-cart__pay-cart__price_tem">'.$_SESSION['cart'][$i][2].'đ</div>
                            <input type="hidden" name="price-cart" value="'.$_SESSION['cart'][$i][2].'">
                            <div class="content__box__nav-cart__pay-cart__quantity">
                            '.$_SESSION['cart'][$i][4].'
                            <input type="hidden" name="quantity-item" value="'.$_SESSION['cart'][$i][4].'">
                            </div>
                            <div class="content__box__nav-cart__pay-cart__money-cart">'.$total_item_price.'đ</div>
                            <input type="hidden" name="total-item-price" value="'.$total_item_price.'">
                            <div class="content__box__nav-cart__pay-cart__button">
                                <a href="index.php?page=cart&&del='.$i.'">
                                x
                                </a>
                            </div>
                        </div>
                    </div>
            ';
            }else if($_SESSION['cart'][$i][3]){
                $total_item_price_sale=$_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                $total_all+=$total_item_price_sale;
                echo'
                <form action="index.php?page=donhang" method="post">
                    <div class="content__box__nav-cart mb__content__box__nav-cart">
                        <div class="content__box__nav-cart__check-cart content__box__nav-cart__check-cart__copy">
                            <input type="checkbox" name="" id="">
                            <div class="content__box__nav-cart__check-cart__img"><img src="img/'.$_SESSION['cart'][$i][1].'" alt=""></div>
                            <input type="hidden" name="image-cart" value="'.$_SESSION['cart'][$i][1].'">
                            <div class="content__box__nav-cart__check-cart__name">'.$_SESSION['cart'][$i][0].'</div>
                            <input type="hidden" name="name-product-cart" value="'.$_SESSION['cart'][$i][0].'">
                            </div>
                        <div class="content__box__nav-cart__pay-cart ">
                            <div class="content__box__nav-cart__pay-cart__price_tem">'.$_SESSION['cart'][$i][3].'đ</div>
                            <input type="hidden" name="price-sale-cart" value="'.$_SESSION['cart'][$i][3].'">
                            <div class="content__box__nav-cart__pay-cart__quantity">
                            '.$_SESSION['cart'][$i][4].'
                            <input type="hidden" name="quantity-item" value="'.$_SESSION['cart'][$i][4].'">
                            </div>
                            <div class="content__box__nav-cart__pay-cart__money-cart">'.$total_item_price_sale.'đ</div>
                            <input type="hidden" name="total-item-price-sale" value="'.$total_item_price_sale.'">
                            <div class="content__box__nav-cart__pay-cart__button">
                                <a href="index.php?page=cart&&del='.$i.'">
                                    x
                                </a>
                            </div>
                        </div>
                    </div>
            ';
            }else{
                $total=$total_item_price+$total_item_price_sale;
                $total_all+=$total;
            }
        };
        echo'
                    <div class="content__box__add-product">
                        <a href="index.php?page=menu1">
                            Thêm sản phẩm
                        </a>
                    </div> 

        ';
        echo'
            </article>

                <aside>
                   <div class="content__box__addres-all">
                        <div class="content__box__addres">
                            <div class="content__box__addres__ship">Giao tới</div>
                            <div class="content__box__addres__add">Thêm địa chỉ</div>
                        </div>
                        <div class="content__box__more-addres">
                            Vui lòng thêm địa chỉ
                        </div>
                   </div>
                   <div class="content__box__sale-all"> 
                        <div class="content__box__sale">
                           
                            <div class="content__box__addres__apply-sale-off">
                                <input type="text" name="" id="" placeholder="Mã khuyến mãi (Nếu có) ">
                            </div>
                            <div class="content__box__sale__apply"><input type="submit" value="Áp dụng"></div>
                        </div>
                        
                    </div>
                    <div class="content__box__total-money">
                        <div class="content__box__total-money__tem">
                            <div class="content__box__total-money__tem__text">Tạm tính</div>
                            <div class="content__box__total-money__tem__price">'.$total_all.'đ
                            <input type="hidden" name="total_all" value="'.$total_all.'">
                            </div>
                        </div>
                        <div class="content__box__total-money__sale">
                            <div class="content__box__total-money__sale__text">Giảm giá</div>
                            <div class="content__box__total-money__sale__price">0đ</div>
                        </div>
                        <div class="content__box__total-money__ship">
                            <div class="content__box__total-money__ship__text">Phí vận chuyển</div>
                            <div class="content__box__total-money__ship__price">0đ</div>
                        </div>
                        <div class="content__box__total-money__total-all">
                            <div class="content__box__total-money__total-all__text">Tổng tiền:</div>
                            <div class="content__box__total-money__total-all__price--color">'.$total_all.'đ</div>
                            <input type="hidden" name="total_all" value="'.$total_all.'">
                        </div>
                        <div class="content__box__total-money__buy">
                            <input type="submit" value="Mua hàng" name="buy-all">
                        </div>
                    </div>     
                </aside>
            </div>
           
        </div>
        <div id="content-container">
            <div class="content-container__all">
                <div class="content-container__all__close">
                    <i class="fa-solid fa-x"></i>
                </div>
                <div class="content-container__all__header">
                    Thêm thông tin giao hàng
                </div>
                
                    <div class="content-container__all__body">
                        <div class="content-container__all__body__about">
                            <div class="content-container__all__body__info">
                                <input class="" type="text" name="name-user" id="" placeholder="Tên người nhận">
                                <input class="" type="text" name="phone-user" id="" placeholder="Số điện thoại">
                            </div>
                            <div class="content-container__all__body__info">
                                <input class="" type="text" name="city-user" id="" placeholder="Tỉnh/Thành phố">
                                <input class="" type="text" name="district_user" id="" placeholder="Quận/Huyện">
                            </div>
                            <div class="content-container__all__body__info">
                                <input class="" type="text" name="wards-user" id="" placeholder="Phường/Xã">
                                <input class="" type="text" name="detail-address-user" id="" placeholder="Địa chỉ cụ thể">
                            </div>
                        </div>
                        <div class="content-container__all__body__methob-pay">
                            <label for="">Phương thức thanh toán</label>
                            <select name="method-pay" id="">
                                <option value="tienmat">Tiền mặt</option>
                                <option value="chuyenkhoan">Chuyển khoản</option>
                            </select>
                        </div>
                        <div class="content-container__all__body__check-pay">
                            <input type="submit" value="Xác Nhận" name="buy-check">
                        </div>
                    </div>
    </form>
        ';
    }
    }


?>

 
 
 <!-- Begin header -->
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
                            <div class="mb__header-page__cart active-head">
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
                    <li><a class="" href="index.php?page=menu1">Sản phẩm</a></li>
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
                        <div class="header-page__info__cart active-head">
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
        <!-- End header -->

        <!-- Begin content -->
         <div style="margin-top: 120px;" id="content">
            <div class="content__title-cart">
                <div class="content__title-cart__col"></div>
                Giỏ hàng
            </div>
            <div id="content__box">
                
                <article> 
                    <div class="content__box__nav-cart content__box__nav-cart__main">
                        <div class="content__box__nav-cart__check-cart ">
                            <input type="checkbox" name="" id="">
                            <p>Chọn tất cả</p>
                            <p></p>
                        </div>
                        <div class="content__box__nav-cart__pay-cart">
                            <div class="">Đơn giá</div>
                            <div class="">Số lượng</div>
                            <div class="">Thành tiền</div>
                            <div class=""></div>
                        </div>


                    </div>
                    <?php
                        showCart();
                    ?>
    <!-- <form action="">
                    <div class="content__box__nav-cart mb__content__box__nav-cart">
                        <div class="content__box__nav-cart__check-cart content__box__nav-cart__check-cart__copy">
                            <input type="checkbox" name="" id="">
                            <div class="content__box__nav-cart__check-cart__img"><img src="img/sp1.png" alt=""></div>
                            <div class="content__box__nav-cart__check-cart__name">Hồng trà</div>
                        </div>
                        <div class="content__box__nav-cart__pay-cart ">
                            <div class="content__box__nav-cart__pay-cart__price_tem">45.000đ</div>
                            <div class="content__box__nav-cart__pay-cart__quantity"><input type="number" name="quantity" id="" value="1" min="1"></div>
                            <div class="content__box__nav-cart__pay-cart__money-cart">45.000đ</div>
                            <div class="content__box__nav-cart__pay-cart__button">
                                <a href="">
                                    <input type="submit" value="x" >
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="content__box__add-product">
                        <a href="index.php?page=menu1">
                            Thêm sản phẩm
                        </a>
                    </div>  -->
                   
                <!-- </article>

                <aside>
                   <div class="content__box__addres-all">
                        <div class="content__box__addres">
                            <div class="content__box__addres__ship">Giao tới</div>
                            <div class="content__box__addres__add">Thêm địa chỉ</div>
                        </div>
                        <div class="content__box__more-addres">
                            Vui lòng thêm địa chỉ
                        </div>
                   </div>
                   <div class="content__box__sale-all"> 
                        <div class="content__box__sale">
                           
                            <div class="content__box__addres__apply-sale-off">
                                <input type="text" name="" id="" placeholder="Mã khuyến mãi (Nếu có) ">
                            </div>
                            <div class="content__box__sale__apply"><input type="submit" value="Áp dụng"></div>
                        </div>
                        
                    </div>
                    <div class="content__box__total-money">
                        <div class="content__box__total-money__tem">
                            <div class="content__box__total-money__tem__text">Tạm tính</div>
                            <div class="content__box__total-money__tem__price">45.000 đ
                            </div>
                        </div>
                        <div class="content__box__total-money__sale">
                            <div class="content__box__total-money__sale__text">Giảm giá</div>
                            <div class="content__box__total-money__sale__price">0đ</div>
                        </div>
                        <div class="content__box__total-money__ship">
                            <div class="content__box__total-money__ship__text">Phí vận chuyển</div>
                            <div class="content__box__total-money__ship__price">0đ</div>
                        </div>
                        <div class="content__box__total-money__total-all">
                            <div class="content__box__total-money__total-all__text">Tổng tiền:</div>
                            <div class="content__box__total-money__total-all__price--color">45.000 đ</div>
                        </div>
                        <div class="content__box__total-money__buy">
                            <input type="submit" value="Mua hàng">
                        </div>
                    </div>     
                </aside>
            </div>
           
        </div>
        <div id="content-container">
            <div class="content-container__all">
                <div class="content-container__all__close">
                    <i class="fa-solid fa-x"></i>
                </div>
                <div class="content-container__all__header">
                    Thêm thông tin giao hàng
                </div>
                
                    <div class="content-container__all__body">
                        <div class="content-container__all__body__about">
                            <div class="content-container__all__body__info">
                                <input class="" type="text" name="" id="" placeholder="Tên người nhận">
                                <input class="" type="text" name="" id="" placeholder="Số điện thoại">
                            </div>
                            <div class="content-container__all__body__info">
                                <input class="" type="text" name="" id="" placeholder="Tỉnh/Thành phố">
                                <input class="" type="text" name="" id="" placeholder="Quận/Huyện">
                            </div>
                            <div class="content-container__all__body__info">
                                <input class="" type="text" name="" id="" placeholder="Phường/Xã">
                                <input class="" type="text" name="" id="" placeholder="Địa chỉ cụ thể">
                            </div>
                        </div>
                        <div class="content-container__all__body__methob-pay">
                            <label for="">Phương thức thanh toán</label>
                            <select name="" id="">
                                <option value="Tiền mặt">Tiền mặt</option>
                                <option value="Chuyển khoản">Chuyển khoản</option>
                            </select>
                        </div>
                        <div class="content-container__all__body__check-pay">
                            <input type="submit" value="Xác Nhận">
                        </div>
                    </div>
    </form> -->
            </div>
        </div>
        <!-- End content -->