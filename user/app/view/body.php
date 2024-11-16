<?php
   $listProductBody= $data['dssp'];

   function show_product_body($listProductBody){
       foreach($listProductBody as $value){
           extract($value);
           if($id_danhmuc===1){
            echo '   
        <a href="index.php?page=detail&&id='.$id_sanpham.'">
            <div class="content__background__list-bestseller__lists-product__product">
                <img src="img/'.$image.'" alt="'.$name.'">
                <div class="content__background__list-bestseller__lists-product__product__name">'.$name.'</div>
                <input type="hidden" name="image" value="'.$name.'">
                <div class="content__background__list-bestseller__lists-product__product__col"></div>
                <div class="content__background__list-bestseller__lists-product__product__desc">
                    <div class="content__background__list-bestseller__lists-product__product__desc__diff-desc">Trà sữa truyền thống</div>
                    <div class="content__background__list-bestseller__lists-product__product__desc__topping">Trân châu</div>
                </div>
                <div class="content__background__list-bestseller__lists-product__product__price-money">
                    <div class="content__background__list-bestseller__lists-product__product__price-money__price">Giá:</div>
                    <div class="content__background__list-bestseller__lists-product__product__price-money__money">'.$price.'đ</div>
                <input type="hidden" name="price" value="'.$price.'">
                <input type="hidden" name="price_sale" value="'.$price_sale.'">
                </div>
                
                <div class="content__background__list-bestseller__lists-product__product__btn">
                    <input type="submit" value="Mua" name="buy-product">
                </div>
            </div>
        
        </a>
';
           }
        }
    }

    function show_product_body_sale($listProductBody){
        foreach($listProductBody as $value){
            extract($value);
                if($price_sale){
                echo'
                        <a href="index.php?page=detail&&id='.$id_sanpham.'">
                            <div class="content__background__list-uudai__lists-product__product">
                                <div class="content__background__list-uudai__lists-product__product__sale">
                                    <p>Ưu đãi</p>
                                </div>
                                <img src="img/'.$image.'" alt="'.$name.'">
                                <input type="hidden" name="image" value="'.$image.'">
                                <div class="content__background__list-uudai__lists-product__product__name">'.$name.'</div>
                                <input type="hidden" name="name-product" value="'.$name.'">
                                <div class="content__background__list-uudai__lists-product__product__col"></div>
                                <div class="content__background__list-uudai__lists-product__product__desc">
                                    <div class="content__background__list-uudai__lists-product__product__desc__diff-desc">Trà sữa truyền thống</div><div class="content__background__list-uudai__lists-product__product__desc__topping">Trân châu</div>
                                </div>
                                <div class="content__background__list-uudai__lists-product__product__price-money">
                                    <div class="content__background__list-uudai__lists-product__product__price-money__price">Giá:</div>
                                    <div class="content__background__list-uudai__lists-product__product__price-money__money">'.$price_sale.'đ</div>
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="hidden" name="pirce_sale" value="'.$price_sale.'">
                                </div>
                                <div class="content__background__list-uudai__lists-product__product__btn">
                                   <input type="submit" value="Mua" name="buy-product">
                                </div>
                            </div>
                        </a>
                ';
               }
        }
    }

?>



        
        <!-- Begin banner -->
        <div class="mb__banner-page__all__first">
            <img width="100%"  src="img/banner.png" alt="">
            <div class="mb__banner-page__all__first__logo">
                <img width="50px" src="img/__-removebg-preview.png" alt="">
            </div>
           
        </div>
        <div id="banner-page">
            <div class="banner-page__all">
                <div class="banner-page__all__first">
                    <img width="100%" style="height: 569.7px;"  src="img/banner.png" alt="">
                    <div class="banner-page__all__first__logo">
                        <img width="120px" src="img/__-removebg-preview.png" alt="">
                    </div>
                    <div class="banner-page__all__first__buy">
                        <a href="#">
                            <button>Đặt Ngay</button>
                        </a>
                    </div>
                </div>
                <div class="banner-page__all__second">
                    <img width="100%" style="height: 569.7px;"  src="img/[1920-x-720]-banner-4.png" alt="">
                    <div class="banner-page__all__second__logo">
                        <img width="120px" src="img/__-removebg-preview.png" alt="">
                    </div>
                    <div class="banner-page__all__second__buy">
                        <a href="#">
                            <button>Đặt Ngay</button>
                        </a>
                    </div>
                </div>
                <div class="banner-page__all__third">
                    <img width="100%" style="height: 569.7px;"  src="img/87654321[1920-x-720]-website-banner.png" alt="">
                    <div class="banner-page__all__third__logo">
                        <img width="160px" src="img/__-removebg-preview.png" alt="">
                    </div>
                    <div class="banner-page__all__third__buy">
                        <a href="#">
                            <button>Đặt Ngay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End banner -->
                 <!-- Begin content -->
        <div style="margin:0" id="content">
            <div class="content__background">
                <div class="content__background__list-bestseller">
                    <div class="content__background__list-bestseller__col-bestseller">
                        <div class="content__background__list-bestseller__col-bestseller__col"></div>
                        <div class="content__background__list-bestseller__col-bestseller__bestseller">
                            <h2>BEST SELLER</h2>
                        </div>
                    </div>
                    <div class="content__background__list-bestseller__lists-product">
                    <?php
                        show_product_body($listProductBody);

                    ?>
                        
                </div>
            </div>
            <div class="content__background__list-uudai">
                <div class="content__background__list-uudai__col-bestseller">
                    <div class="content__background__list-uudai__col-bestseller__col"></div>
                    <div class="content__background__list-uudai__col-bestseller__bestseller">
                        <h2>ƯU ĐÃI</h2>
                    </div>
                </div>
                <div class="content__background__list-uudai__lists-product">
                  <?php
                        show_product_body_sale($listProductBody);
                  ?>
                  
                </div>
            </div>
        </div>
        <div class="content__business">
            <div class="content__business__slogan"><h1>DOANH NGHIỆP HỢP TÁC</h1></div>
            <div class="content__business__logo">
                <img src="img/logo1.png" alt="">
                <img src="img/logo.png" alt="">
                <img src="img/logo2.png" alt="">
                <img src="img/logo3.png" alt="">
            </div>
        </div>
    </div>
    


        <!-- End content -->