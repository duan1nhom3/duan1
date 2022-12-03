<main class="loginn">
    <div class="login">
        </body>
        <div class="animated bounceInDown">
            <div class="containerr">
                
                <form action="index.php?act=login" method="post" name="form1" class="bbox" >
                    <h4>Đăng Nhập</h4>
                    <h5>Đăng nhập vào tài khoản của bạn</h5>
                    <?php if(isset($thongbao)) : ?>
                        <div class="thongbao">
                            <?= $thongbao ?>
                        </div>
                    <?php endif ?>
                    <input type="text" name="email" placeholder="Email" >
                    
                    <input type="password" name="pass" placeholder="Passsword" >
                    
                    <a href="index.php?act=forgotpass" class="forgetpass">Quên mật khẩu?</a>
                    <input type="submit" name="login" value="Đăng nhập" class="btn1">
                </form>

                <a href="index.php?act=signup" class="dnthave">Chưa có tài khoản? Đăng ký ngay</a>

            </div>

        </div>
    </div>
</main>