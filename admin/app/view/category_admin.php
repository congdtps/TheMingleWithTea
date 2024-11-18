<?php
    $listCate=$data['cate'];
    function viewCate($listCate){
        foreach($listCate as $value){
            extract($value);
            echo'
                            <div class="content-admin__all__controler-admin__info-product__nav controller-admin-all">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <p style="color: #FFB647;">'.$id_dm.'</p>
                                </div>
                                <div class="content-admin__all__controler-admin__info-product__nav__desc">
                                    <div class="date-post">
                                        <p>'.$created_at.'</p>
                                    </div>
                                    <div class="name-pro">
                                        <p>'.$name_dm.'</p>
                                    </div>
                                    <div class="name-pro">
                                        <p>'.$link_category.'</p>
                                    </div>
                                </div>
                                <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                                    <a href="index.php?page=deleCate&&id='.$id_dm.'">
                                        <input class="input-dele" type="submit" value="Xóa">
                                    </a>
                                    <a href="index.php?page=fix_category_admin&&id='.$id_dm.'">
                                        <input class="input-fix" type="submit" value="Sửa">
                                    </a>
                                </div>
                        </div>';
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
                            <li><a class="" href="index.php"><i class="fa-solid fa-house"></i><p>Bảng điều khiển</p></a></li>
                            <li><a class="" href="index.php?page=bill_admin"><i class="fa-solid fa-book"></i><p>Danhh sách đơn hàng</p></a></li>
                            <li><a class="" href="index.php?page=personnel_admin"><i class="fa-solid fa-user"></i><p>Nhân viên</p></a></li>
                            <li><a class="" href="index.php?page=product"><i class="fa-solid fa-martini-glass"></i><p>Sản phẩm</p></a></li>
                            <li><a class="active-admin" href="#"><i class="fa-solid fa-list"></i><p>Danh mục sản phẩm</p></a></li>
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
                    <form action="index.php?page=addCate" method="post">
                        <div class="content-admin__all__controler-admin__search-all-product">
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for=""> ID danh mục</label>
                                    <input type="text" name="id_dm" id="" placeholder="ID">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Danh mục</label>
                                    <input type="text" name="name_dm" id="" placeholder="Tên danh mục">
                                </div>
                                <!-- <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Hình ảnh</label>
                                    <input type="text" name="" id="" placeholder="URL">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Giá</label>
                                    <input type="text" name="" id="" placeholder="25.000đ">
                                </div> -->
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Link danh mục</label>
                                    <input type="text" name="link_category" id="" placeholder="Link">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Ngày bắt đầu thêm</label>
                                    <input type="date" name="created_at" id="" placeholder="Ngày bắt đầu">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product__search">
                                        <input type="submit" value="Thêm" name="add-cate">                               
                                </div> 
                            </div>
                    </form>
                        <div class="content-admin__all__controler-admin__info-product">
                            <div class="content-admin__all__controler-admin__info-product__nav first">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <h3>ID Danh mục</h3>
                                </div>
                                <div class="content-admin__all__controler-admin__info-product__nav__desc">
                                    <div class="date-post">
                                        <h3>Ngày thêm</h3>
                                    </div>
                                    <div class="name-pro">
                                        <h3>Tên danh mục</h3>
                                    </div>
                                    <div class="quantity-pro">
                                        <h3>Link danh mục</h3>
                                    </div>
                                </div>
                                <!-- <div class="content-admin__all__controler-admin__info-product__nav__price ">
                                    <h3>Giá</h3>
                                </div> -->
                            </div>
                            <?php
                                    viewCate($listCate);
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