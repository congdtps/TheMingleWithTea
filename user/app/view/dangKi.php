<div id="main">
       <!-- Begin content -->
       <div class="register">
        <div class="register-container">
            <a href="index.php">
                <i class="fa-solid fa-circle-xmark location"></i>
            </a>
            <img src="img/__-removebg-preview.png" alt="Logo" class="register__logo">
            <h2>Đăng kí</h2>
            <form onsubmit="event.preventDefault(); resgister();">
                    <div class="register-container__input">  
                        <h3>Tên đăng kí</h3>
                        <i class="fa-solid fa-user icon"></i>
                        <input id="register_username" type="text" placeholder="Điền Email hoặc Số điện thoại">
                    </div> 
                    <div class="register-container__input">
                        <h3>Mật khẩu</h3>
                        <i class="fa-solid fa-lock icon"></i>
                        <input id="resgister_password" type="password" placeholder="Điền mật khẩu">
                    </div>
                    <div class="register-container__input">
                        <h3>Nhập lại mật khẩu</h3>
                        <i class="fa-solid fa-lock icon"></i>
                        <input id="enter_password" type="password" placeholder="Nhập lại mật khẩu">
                    </div>
                        <a href="index.php?page=dangnhap" class="forgot-password">Đã có tài khoản</a>
                        <input type="submit" value="Đăng kí">
            </form>
                        <!-- <button onclick="resgister()">Đăng nhập</button> -->
                        <!-- <p class="sign-up">Chưa có tài khoản</p> -->
                        <p>Hoặc</p>
                    <div class="register-container__social-login">
                        <button><a href="https://www.facebook.com/profile.php?id=61566955860195"><i class="fa-brands fa-facebook"></i></a></button>
                        <button><a href="congdtps40376@gmail.com"><i class="fa-solid fa-envelope"></i></a></button>
                        <button><a href="https://www.youtube.com/channel/UCmKnhgRDhu4d2wzJVrK_omw"><i class="fa-brands fa-twitter"></i></a></button>
                    </div>
        </div>
    </div>

       <!-- End content -->

    </div>