<?php
    $listProduct=$data['product'];

    function viewProduct($listProduct){
        foreach($listProduct as $value){
            extract($value);
            if($price_sale){
                echo'
                <div class="content-admin__all__controler-admin__info-product__nav controller-admin-all second">
                    <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                        <input type="checkbox" name="" id="">
                        <p style="color: #FFB647;">#SP'.$id_sanpham.'</p>
                    </div>
                    <div class="content-admin__all__controler-admin__info-product__nav__desc">
                        <div class="date-post">
                            <p>'.$name.'</p>
                        </div>
                        <div class="name-pro">
                            <img width="50px" src="../user/img/'.$image.'" alt="">
                        </div>
                        <div class="quantity-pro">
                            <p>'.$price.'đ</p>
                        </div>
                    </div>
                    <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                        <p>'.$price_sale.'đ</p>
                        <a href="index.php?page=del&&id='.$id_sanpham.'">
                            <input class="input-dele" type="submit" value="Xóa">
                        </a>
                        <a href="index.php?page=fix_product_admin&&id='.$id_sanpham.'">
                            <input class="input-fix" type="submit" value="Sửa">
                        </a>
                    </div>
                </div>
';
            }else{
                echo'
                <div class="content-admin__all__controler-admin__info-product__nav controller-admin-all second">
                    <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                        <input type="checkbox" name="" id="">
                        <p style="color: #FFB647;">#SP'.$id_sanpham.'</p>
                    </div>
                    <div class="content-admin__all__controler-admin__info-product__nav__desc">
                        <div class="date-post">
                            <p>'.$name.'</p>
                        </div>
                        <div class="name-pro">
                            <img width="50px" src="../user/img/'.$image.'" alt="">
                        </div>
                        <div class="quantity-pro">
                            <p>'.$price.'đ</p>
                        </div>
                    </div>
                    <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                        <p>'.$price.'đ</p>
                        <a href="index.php?page=del&&id='.$id_sanpham.'">
                            <input class="input-dele" type="submit" value="Xóa">
                        </a>
                        <a href="index.php?page=fix_product_admin&&id='.$id_sanpham.'">
                            <input class="input-fix" type="submit" value="Sửa">
                        </a>
                    </div>
                </div>
';
            }
           
        }
    }

?>


<body>
    <div id="main">
       <div id="content-admin">
            <div class="content-admin__all">
                <article>
                    <div class="content-admin__all__list-nav">
                        <a href="../user/index.php">
                            <img src="../user/img/__-removebg-preview.png" alt="">
                        </a>
                        <h2>Admin</h2>
                        <ul>
                            <li><a class="" href="index.php?page=main"><i class="fa-solid fa-house"></i><p>Quản lý người dùng</p></a></li>
                            <li><a class="" href="index.php?page=bill_admin"><i class="fa-solid fa-book"></i><p>Danhh sách đơn hàng</p></a></li>
                            <li><a class="" href="index.php?page=personnel_admin"><i class="fa-solid fa-user"></i><p>Nhân viên</p></a></li>
                            <li><a class="active-admin" href="#"><i class="fa-solid fa-martini-glass"></i><p>Sản phẩm</p></a></li>
                            <li><a class="" href="index.php?page=category"><i class="fa-solid fa-list"></i><p>Danh mục sản phẩm</p></a></li>
                            <li><a class="" href="#"><i class="fa-solid fa-arrow-trend-up"></i><p>Thống kê</p></a></li>
                            <li><a class="" href="#"><i class="fa-solid fa-calendar-days"></i><p>Lịch hẹn</p></a></li>
                            <li><a class="" href="#"><i class="fa-solid fa-comments"></i><p>Trò chuyện</p></a></li>
                            <li><a class="" href="#"><i class="fa-solid fa-wallet"></i><p>Ví</p></a></li>
                        </ul>
                        <div class="content-admin__all__list-nav__help">
                            <a href="#">
                                <i class="fa-solid fa-circle-question"></i>
                                <p>Help</p>
                            </a>
                        </div>
                    </div>
                </article>
    
    
                <aside>
                    <div class="content-admin__all__controler-admin">
                        <div class="content-admin__all__controler-admin__search-all">
                            <div class="content-admin__all__controler-admin__search-all__search">
                                <label for="">Tổng Quan</label>
                                <input type="text" name="" id="" placeholder="Tìm kiếm">
                                <a href="">
                                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                </a>
                            </div>
                            <div class="content-admin__all__controler-admin__search-all__bell-admin">
                                <a href="">
                                    <div class="content-admin__all__controler-admin__search-all__bell-admin__bell">
                                        <i class="fa-solid fa-bell"></i>
                                        <small></small>
                                    </div>
                                </a>
                                <a href="">
                                    <img src="../user/img/myself.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <form action="index.php?page=add" method="post" enctype='multipart/form-data'>
                        <div class="content-admin__all__controler-admin__search-all-product">
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Sản phẩm</label>
                                    <input type="text" name="name" id="" placeholder="Tên sản phẩm">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Hình ảnh</label>
                                    <input style="padding:6px" type="file" name="image" id="" >
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Giá gốc</label>
                                    <input type="text" name="price" id="" placeholder="Giá gốc">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Giá giảm</label>
                                    <input type="text" name="price_sale" id="" placeholder="Giá giảm">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">ID danh mục</label>
                                    <input type="text" name="id_danhmuc" id="" placeholder="ID danh mục">
                                </div>
                               
                                <div class="content-admin__all__controler-admin__search-all-product__product__search">
                                   
                                        <input type="submit" value="Thêm" name="add">
                                    
                                </div> 
                            </div>
                        </form>
                        <div class="content-admin__all__controler-admin__info-product">
                            <div class="content-admin__all__controler-admin__info-product__nav first second">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <h3>ID Sản phẩm</h3>
                                </div>
                                <div class="content-admin__all__controler-admin__info-product__nav__desc">
                                    <div class="date-post">
                                        <h3>Tên sản phẩm</h3>
                                    </div>
                                    <div class="name-pro">
                                        <h3>Ảnh</h3>
                                    </div>
                                    <div class="quantity-pro">
                                        <h3>Giá gốc</h3>
                                    </div>
                                </div>
                                <div class="content-admin__all__controler-admin__info-product__nav__price ">
                                    <h3>Giá giảm</h3>
                                </div>
                            </div>
                           <?php
                                viewProduct($listProduct);
                           ?>
                           
                            <!-- <div class="content-admin__all__controler-admin__info-product__nav controller-admin-all second">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <p style="color: #FFB647;">#TS01</p>
                                </div>
                                <div class="content-admin__all__controler-admin__info-product__nav__desc">
                                    <div class="date-post">
                                        <p>Trà sữa truyền thống</p>
                                    </div>
                                    <div class="name-pro">
                                        <img width="50px" src="../user/img/sp5.png" alt="">
                                    </div>
                                    <div class="quantity-pro">
                                        <p>25.000đ</p>
                                    </div>
                                </div>
                                <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                                    <p>20.000đ</p>
                                    <a href="">
                                        <input class="input-dele" type="submit" value="Xóa">
                                    </a>
                                    <a href="index.php?page=fix_product_admin">
                                        <input class="input-fix" type="submit" value="Sửa">
                                    </a>
                                </div>
                            </div> -->
                         
                           
                           
                        </div>
                        
                    </div>

                </aside>
            </div>
       </div>

    </div>
</body>
<script src="/user/upload/js/index.js"></script>
</html>