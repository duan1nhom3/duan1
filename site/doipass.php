<main class="loginn signup">
    <div class="login">
        </body>
        <div class="animated bounceInDown">
            <div class="containerr">
                
                <form action="index.php?act=doipass" method="post" name="form1" class="bbox">
                    <h4>Đổi mật khẩu</h4>
                    <?php if(isset($thongbao)) : ?>
                        <div class="thongbao">
                            <?= $thongbao ?>
                        </div>
                    <?php endif ?>
                    
                    <input type="text" name="email" placeholder="Email" >
                        <span style="color: red;">
                            <?= isset($error['email']) ? $error['email'] : '' ?>
                        </span>
                    <input type="text" name="passcu" placeholder="Mật khẩu cũ" >
                        <span style="color: red;">
                            <?= isset($error['passcu']) ? $error['passcu'] : '' ?>
                        </span>
                    <input type="password" name="passmoi" placeholder="Mật khẩu mới">
                        <span style="color: red;">
                            <?= isset($error['passmoi']) ? $error['passmoi'] : '' ?>
                        </span>
                    
                    <input type="text" name="repass" placeholder="Xác nhận mật khẩu mới" >
                        <span style="color: red;">
                            <?= isset($error['repass']) ? $error['repass'] : '' ?>
                        </span>
                    
                    <input type="submit" name="doipass" value="Đổi mật khẩu" class="btn1">
                </form>
                <a href="index.php?act=login" class="dnthave">Đã có tài khoản? Đăng nhập ngay</a>
            </div>

        </div>
    </div>
</main>