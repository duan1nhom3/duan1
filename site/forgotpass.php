<main class="loginn">
    <div class="login">
        </body>
        <div class="animated bounceInDown">
            <div class="containerr">
                
                <form action="index.php?act=forgotpass" method="post" name="form1" class="bbox" >
                    <h4>Quên mật khẩu</h4>
                    <?php if(isset($thongbao)) : ?>
                        <div class="thongbao">
                            <?= $thongbao ?>
                        </div>
                    <?php endif ?>
                    <input type="text" name="email" placeholder="Email" >
                    
                    <input type="text" name="name" placeholder="Họ tên" >
                    
                    
                    <input type="submit" name="forgot" value="Quên mật khẩu" class="btn1">
                </form>
                <a href="index.php?act=signup" class="dnthave">Chưa có tài khoản? Đăng ký ngay</a>
            </div>

        </div>
    </div>
</main>