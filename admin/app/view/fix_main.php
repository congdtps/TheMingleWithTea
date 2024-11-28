
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
                            <li><a class="active-admin" href="index.php?page=main"><i class="fa-solid fa-house"></i><p>Quản lý người dùng</p></a></li>
                            <li><a class="" href="index.php?page=bill_admin"><i class="fa-solid fa-book"></i><p>Danhh sách đơn hàng</p></a></li>
                            <li><a class="" href="index.php?page=personnel_admin"><i class="fa-solid fa-user"></i><p>Nhân viên</p></a></li>
                            <li><a class="" href="index.php?page=product"><i class="fa-solid fa-martini-glass"></i><p>Sản phẩm</p></a></li>
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
                                <label for="">Quản lý người dùng</label>
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
            <form action="index.php?page=updateUser" method="post">
                        <div class="content-admin__all__controler-admin__search-all-product">
                            <input type="hidden" name="id_user" value="'.$id_user.'">
                            <div class="content-admin__all__controler-admin__search-all-product__product">
                                <label for="">Tên khách hàng</label>
                                <input type="text" name="name_user" value="'.$name_user.'" id="" placeholder="Tên">
                            </div>
                            
                            <div class="content-admin__all__controler-admin__search-all-product__product">
                                <label for="">Email khách hàng</label>
                                <input type="text" name="email" value="'.$email.'" id="" placeholder="Email">
                            </div>
                            <div class="content-admin__all__controler-admin__search-all-product__product">
                                <label for="">Password khách hàng</label>
                                <input type="text" name="password_user" value="'.$password_user.'" id="" placeholder="Password">
                            </div>
                            <div class="content-admin__all__controler-admin__search-all-product__product">
                                <label for="">SĐT khách hàng</label>
                                <input type="text" name="phone" value="'.$phone.'" id="" placeholder="SĐT">
                            </div>
                            <div class="content-admin__all__controler-admin__search-all-product__product">
                                <label for="">Địa chỉ khách hàng</label>
                                <input type="text" name="address" value="'.$address.'" id="" placeholder="Địa chỉ">
                            </div>
                            <div class="content-admin__all__controler-admin__search-all-product__product">
                                <label for="">Role</label>
                                <input type="text" name="role" value="'.$role.'" id="" placeholder="Role">
                            </div>
                            <div class="content-admin__all__controler-admin__search-all-product__product__search">

                                    <input type="submit" value="Sửa" name="update_user">

                            </div>
                        </div>
            </form>
                            ';

                        ?>
                        <div class="content-admin__all__controler-admin__info-product">
                            <div style="" class="content-admin__all__controler-admin__info-product__nav first second">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <h3>ID khách hàng</h3>
                                </div>
                                <div style="grid-template-columns: 200px 220px 135px 100px;" class="content-admin__all__controler-admin__info-product__nav__desc">
                                    <div class="date-post">
                                        <h3>Tên khách hàng</h3>
                                    </div>
                                    <div class="name-pro">
                                        <h3>Email khách hàng</h3>
                                    </div>
                                    <div class="quantity-pro">
                                        <h3>Password</h3>
                                    </div>
                                    <div class="quantity-pro">
                                        <h3>Role</h3>
                                    </div>
                                </div>
                                <div style="grid-template-columns: 110px 262px;" class="content-admin__all__controler-admin__info-product__nav__price">
                                    <h3>SĐT</h3>
                                    <h3>Địa chỉ</h3>
                                </div>
                            </div>
                            <?php
                                echo'
                            <div  class="content-admin__all__controler-admin__info-product__nav second">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <p style="color: #FFB647;">#KH'.$id_user.'</p>
                                </div>
                                <div style="grid-template-columns: 200px 220px 135px 100px;" class="content-admin__all__controler-admin__info-product__nav__desc">
                                    <div class="date-post">
                                        <p>'.$name_user.'</p>
                                    </div>
                                    <div class="name-pro">
                                        <p>'.$email.'</p>
                                    </div>
                                    <div class="quantity-pro">
                                        <p>'.$password_user.'</p>
                                    </div>
                                    <div class="quantity-pro">
                                        <p>'.$role.'</p>
                                    </div>
                                </div>
                                <div style="grid-template-columns: 110px 262px;" class="content-admin__all__controler-admin__info-product__nav__price">
                                    <p>'.$phone.'</p>
                                    <p>'.$address.'</p>
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