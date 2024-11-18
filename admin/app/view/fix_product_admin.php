
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
                            <li><a class="" href="index.php"><i class="fa-solid fa-house"></i><p>Bảng điều khiển</p></a></li>
                            <li><a class="" href="index.php?page=bill_admin"><i class="fa-solid fa-book"></i><p>Danhh sách đơn hàng</p></a></li>
                            <li><a class="" href="index.php?page=personnel"><i class="fa-solid fa-user"></i><p>Nhân viên</p></a></li>
                            <li><a class="active-admin" href="index.php?page=product"><i class="fa-solid fa-martini-glass"></i><p>Sản phẩm</p></a></li>
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

                        <?php
                        echo'
                        <form action="index.php?page=updateProduct" method="post" enctype="multipart/form-data">
                            <div class="content-admin__all__controler-admin__search-all-product">
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Tên Sản phẩm</label>
                                    <input type="text" name="name" value="'.$name.'" id="" placeholder="Tên sản phẩm">
                                    <input type="hidden" name="id_sanpham" value="'.$id_sanpham.'" id="" placeholder="Tên sản phẩm">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Hình ảnh</label>
                                    <input type="file" name="image" id="">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Giá gốc</label>
                                    <input type="text" name="price" value="'.$price.'" id="" placeholder="Giá gốc">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Giá giảm</label>
                                    <input type="text" name="price_sale" value="'.$price_sale.'" id="" placeholder="Giá giảm">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">ID danh mục</label>
                                    <input type="text" name="id_danhmuc" value="'.$id_danhmuc.'" id="" placeholder="ID danh mục">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product__search">
                                    <input type="submit" value="Sửa" name="updateProduct_Admin">
                                </div> 
                            </div>
                        </form>
                        ';

                        ?>

                        <div style="margin-top:80px" class="content-admin__all__controler-admin__info-product">
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
                                echo'
                            <div class="content-admin__all__controler-admin__info-product__nav controller-admin-all second">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <p style="color: #FFB647;">'.$id_sanpham.'</p>
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
                                    
                                   
                                </div>
                            </div>
                                ';

                            ?>
                         
                           
                           
                        </div>
                        
                    </div>

                </aside>
            </div>
       </div>

    </div>
</body>
<script src="/user/upload/js/index.js"></script>
</html>