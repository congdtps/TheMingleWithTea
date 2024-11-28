<?php
    $listpersonnel = $data['personnel'];
    function viewpersonnel($listpersonnel){
        foreach($listpersonnel as $value ){ 
            extract($value);
            echo'<div style="grid-template-columns:200px 1fr 1fr 1fr" class="content-admin__all__controler-admin__info-product__nav controller-admin-all second">
                                    <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                        <input type="checkbox" name="" id="">
                                        <p style="color: #FFB647;">#NV'.$id_nv.'</p>
                                    </div>
                                    <div style="grid-template-columns:repeat(3,245px)" class="content-admin__all__controler-admin__info-product__nav__desc">
                                        <div class="date-post">
                                            <p>'.$email.'</p>
                                        </div>
                                        <div class="name-pro">
                                            <p>'.$name_nv.'</p>
                                        </div>
                                        <div class="quantity-pro">
                                            '.$password.'
                                        </div>
                                        
                                    </div>
                                    <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                                        <p>'.$role  .'</p>
                                        
                                    </div>
                                     <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                                        <a href="index.php?page=deleteNV&&id='.$id_nv.'">
                                            <input class="input-dele" type="submit" value="Xóa">
                                        </a>
                                        <a href="index.php?page=fix_personnel_admin&&id='.$id_nv.'">
                                            <div style="padding: 8px 12px;border-radius: 4px;" class="input-fix">
                                                Sửa
                                            </div>
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
                        <ul><li><a class="" href="index.php?page=main"><i class="fa-solid fa-house"></i><p>Quản lý người dùng</p></a></li>
                            <li><a class="" href="index.php?page=bill_admin"><i class="fa-solid fa-book"></i><p>Danhh sách đơn hàng</p></a></li>
                            <li><a class="active-admin" href="#"><i class="fa-solid fa-user"></i><p>Nhân viên</p></a></li>
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
                                <label for="">Nhân Viên</label>
                                <input type="text" name="id" id="" placeholder="Tìm kiếm">
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
                    <form action="index.php?page=addNV" method="post"><div class="content-admin__all__controler-admin__search-all-product">
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Id NV</label>
                                    <input type="text" name="id_nv" id="" placeholder="ID">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Tên</label>
                                    <input type="text" name="name_nv" id="" placeholder="Tên nhân viên">
                                </div>
                               
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="" placeholder="Email nhân viên">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Password</label>
                                    <input type="text" name="password" id="" placeholder="Password ">
                                </div>
                                <div class="content-admin__all__controler-admin__search-all-product__product">
                                    <label for="">Role</label>
                                    <input type="text" name="role" id="" placeholder="Role ">
                                </div>
                                
                               
                                <div class="content-admin__all__controler-admin__search-all-product__product__search">
                                  
                                        <input type="submit" value="Thêm" name="addpersonnel">
                                
                                </div> 
                            </div>
                    </form>
                            <div class="content-admin__all__controler-admin__info-product">
                                <div style="grid-template-columns:200px 1fr 1fr 1fr" class="content-admin__all__controler-admin__info-product__nav first second">
                                    <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                        <input type="checkbox" name="" id="">
                                        <h3>ID Nhân Viên</h3>
                                    </div>
                                    <div style="grid-template-columns:repeat(3,245px)" class="content-admin__all__controler-admin__info-product__nav__desc">
                                        <div class="date-post">
                                            <h3>Email nhân viên</h3></div>
                                        <div class="name-pro">
                                            <h3>Tên nhân viên</h3>
                                        </div>
                                        <div class="quantity-pro">
                                            <h3>Password</h3>
                                        </div>
                                    </div>
                                    <div class="content-admin__all__controler-admin__info-product__nav__price ">
                                        <h3>Role</h3>
                                    </div>
                                    
                                </div>
                               
                               
                                <!-- <div class="content-admin__all__controler-admin__info-product__nav controller-admin-all second">
                                    <div class="content-admin__all__controler-admin__info-product__nav__check-id">
                                        <input type="checkbox" name="" id="">
                                        <p style="color: #FFB647;">#NV01</p>
                                    </div>
                                    <div class="content-admin__all__controler-admin__info-product__nav__desc">
                                        <div class="date-post">
                                            <p>11/02/2024</p>
                                        </div>
                                        <div class="name-pro">
                                            <p>Nguyễn Hoàng Hưng</p>
                                        </div>
                                        <div class="quantity-pro">
                                            1
                                        </div>
                                    </div>
                                    <div class="content-admin__all__controler-admin__info-product__nav__price controller-admin">
                                        <p>22/10/2024</p>
                                        <a href="">
                                            <input class="input-dele" type="submit" value="Xóa">
                                        </a>
                                        <a href="index.php?page=fix_personnel_admin">
                                            <div style="padding: 8px 12px;border-radius: 4px;" class="input-fix">
                                                Sửa
                                            </div>
                                        </a>
                                    </div>
                                </div>
                             
                                -->
                                <?php
                                viewpersonnel($listpersonnel);
                                ?>
                               
                            </div></div>

</aside>
</div>
</div>

</div>
</body>