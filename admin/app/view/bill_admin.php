<?php
    $listBill=$data['dsbill'];

    function showBill($listBill){
        foreach($listBill as $value){
            extract($value);
            echo'
            <div class="content-admin__all__controler-admin__info-product__nav controller-admin-all">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <p style="color: #FFB647;">#DH'.$id_dh.'</p>
                                </div>
                                <div style="grid-template-columns:250px 150px 150px 150px" class="content-admin__all__controler-admin__info-product__nav__desc">
                                     <div class="date-post">
                                        <p>ID khách hàng: '.$id_user.'</p>
                                        <p style="padding:10px 0">'.$address.'</p>
                                        <p>'.$phone.'</p>
                                        
                                    </div>
                                    <div class="date-post">
                                        <p>'.$trangthai.'</p>
                                    </div>
                                    <div class="name-pro">
                                        <p style="padding-bottom:5px">Tổng sp là: '.$quantity_bill.'
                                        </p>
                                        <p>Gồm: '.$name_products.'</p>
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
                                <div style="justify-content:space-evenly" class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                                    <a href="index.php?page=delBill&&id='.$id_dh.'">
                                        <input class="input-dele" type="submit" value="Xóa">
                                    </a>
                                    <a href="index.php?page=fix_bill_admin&&id='.$id_dh.'">
                                        <input class="input-fix" type="submit" value="Sửa">
                                    </a>
                                </div>
                               
            </div>
                         
            ';
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
                            <li><a class="active-admin" href="index.php?page=bill_admin"><i class="fa-solid fa-book"></i><p>Danhh sách đơn hàng</p></a></li>
                            <li><a class="" href="index.php?page=personnel_admin"><i class="fa-solid fa-user"></i><p>Nhân viên</p></a></li>
                            <li><a class="" href="index.php?page=product"><i class="fa-solid fa-martini-glass"></i><p>Sản phẩm</p></a></li>
                            <li><a class="" href="index.php?page=category"><i class="fa-solid fa-list"></i><p>Danh mục sản phẩm</p></a></li>
                            <li><a class="" href="index.php?page=statistics"><i class="fa-solid fa-arrow-trend-up"></i><p>Thống kê</p></a></li>
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
                        <form action="">
                        <div class="content-admin__all__controler-admin__search-all-product">
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Mã đơn hàng</label>
                                    <input type="text" name="" id="" placeholder="Mã">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Tráng thái đơn hàng</label>
                                    <select name="" id="">
                                        <option value="daXL">Đã xử lí</option>
                                        <option value="chXL">Chưa xử lí</option>
                                    </select>
                                </div>
                               
                                
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Ngày tạo</label>
                                    <input type="date" name="" id="">
                                </div>
                               
                                <div class="content-admin__all__controler-admin__search-all-product__product__search">
                                    <a href="">
                                        <input type="submit" value="Tìm kiếm">
                                    </a>
                                </div> 
                            </div>
                        </form>
                        <div class="content-admin__all__controler-admin__info-product">
                            <div class="content-admin__all__controler-admin__info-product__nav first">
                                <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                    <input type="checkbox" name="" id="">
                                    <h3>ID đơn hàng</h3>
                                </div>
                                <div style="grid-template-columns:250px 150px 150px 150px" class="content-admin__all__controler-admin__info-product__nav__desc">
                                    <div class="date-post">
                                        <h3>Khách hàng</h3>
                                    </div>
                                    <div class="date-post">
                                        <h3>Trạng thái</h3>
                                    </div>
                                    <div class="name-pro">
                                        <h3>Sản phẩm</h3>
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
                                showBill($listBill);
                            ?>
                           
                            
                           
                           
                        </div>
                        
                    </div>

                </aside>
            </div>
       </div>

    </div>
</body>