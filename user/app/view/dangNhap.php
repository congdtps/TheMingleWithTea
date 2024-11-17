<div id="main">
       <!-- Begin content -->
       <div class="login">
        <div class="login-container">
            <a href="/user/index.html">
                <i class="fa-solid fa-circle-xmark location"></i>
            </a>
            <img src="img/__-removebg-preview.png" alt="Logo" class="login-container_logo">
            <h2>Đăng nhập</h2>
                <form action="index.php?page=checkUser" method="post" enctype="multipart/form-data">
                    <div class="login-container_input">  
                        <h3>Tên đăng nhập</h3>
                        <i class="fa-solid fa-user icon"></i>
                        <input id="login-container_input_username" type="text" placeholder="Enter Username" name="name" required autocomplete="off">
                    </div> 
                    <div class="login-container_input">
                        <h3>Mật khẩu</h3>
                        <i class="fa-solid fa-lock icon"></i>
                        <input id="login-container_input_password" type="password" placeholder="Điền mật khẩu" name="pass" required autocomplete="off">
                    </div>
                    <div class="login-container__information">
                        <p><a href="dangKi.html">Chưa có tài khoản</a></p>
                        <a href="#">Quên mật khẩu</a>
                    </div>
                        <input name="sub" type="submit" value="Đăng nhập" >
                    </form>
                        <p>Hoặc</p>
                    <div class="login-container__social-login">
                        <button><a href="https://www.facebook.com/profile.php?id=61566955860195"><i class="fa-brands fa-facebook"></i></a></button>
                        <button><a href="congdtps40376@gmail.com"><i class="fa-solid fa-envelope"></i></a></button>
                        <button><a href="https://www.youtube.com/channel/UCmKnhgRDhu4d2wzJVrK_omw"><i class="fa-brands fa-twitter"></i></a></button>
                    </div>    
        </div>
    </div>

       <!-- End content -->

</div>