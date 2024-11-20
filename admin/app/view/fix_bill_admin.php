<?php


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
                            <li><a class="" href="index.php?page=main"><i class="fa-solid fa-house"></i><p>Bảng điều khiển</p></a></li>
                            <li><a class="active-admin" href="index.php?page=bill_admin"><i class="fa-solid fa-book"></i><p>Danhh sách đơn hàng</p></a></li>
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
                                <label for="">Đơn Hàng</label>
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
                    <form action="index.php?page=updateBill" method="post">
                        <div class="content-admin__all__controler-admin__search-all-product">
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Tráng thái đơn hàng</label>
                                        <input type="text" name="trangthai" value="'.$trangthai.'" id=""> 
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Address</label>
                                    <input type="hidden" name="id_dh" value="'.$id_dh.'">
                                    <input type="text" name="address" value="'.$address.'" id="" placeholder="Địa chỉ">
                                </div>
                                
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" value="'.$phone.'" id=""  placeholder="SĐT">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">ID nhân viên</label>
                                    <input type="text" name="id_nv" value="'.$id_nv.'" id=""  placeholder="ID">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product__search">
                                        <input type="submit" value="Sửa" name="updateBillAdmin">
                                </div> 
                            </div>
                    </form>
                        ';

                        ?>
                   
                        <div class="content-admin__all__controler-admin__info-product">
                            <div class="content-admin__all__controler-admin__info-product__nav first">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <h3>ID đơn hàng</h3>
                                </div>
                                <div style="grid-template-columns:250px 150px 150px" class="content-admin__all__controler-admin__info-product__nav__desc">
                                    <div class="date-post">
                                        <h3>Khách hàng</h3>
                                    </div>
                                    <div class="date-post">
                                        <h3>Trạng thái</h3>
                                    </div>
                                    <div class="name-pro">
                                        <h3>Tổng tiền</h3>
                                    </div>
                                 
                                </div>
                               
                                <div class="content-admin__all__controler-admin__info-product__nav__price ">
                                    <h3>PTTT</h3>
                                </div>
                                <div class="content-admin__all__controler-admin__info-product__nav__price ">
                                    <h3>ID NV</h3>
                                </div>
                            </div>
                            <?php
                                echo'
                                <div class="content-admin__all__controler-admin__info-product__nav controller-admin-all">
                                                    <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                                        <input type="checkbox" name="" id="">
                                                        <p style="color: #FFB647;">#DH'.$id_dh.'</p>
                                                    </div>
                                                    <div style="grid-template-columns:250px 150px 150px" class="content-admin__all__controler-admin__info-product__nav__desc">
                                                         <div class="date-post">
                                                            <p>ID khách hàng: '.$id_user.'</p>
                                                            <p style="padding:10px 0">'.$address.'</p>
                                                            <p>'.$phone.'</p>
                                                            
                                                        </div>
                                                        <div class="date-post">
                                                            <p>'.$trangthai.'</p>
                                                        </div>
                                                        <div class="name-pro">
                                                            <p>'.$total.'đ</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                                                        '.$id_pttt.'
                                                    </div>
                                                    <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                                                        '.$id_nv.'
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