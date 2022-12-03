<main class="loginn signup">
    <div class="login">
        </body>
        <div class="animated bounceInDown">
            <div class="containerr">
                
                <form action="index.php?act=signup" method="post" name="form1" class="bbox" enctype="multipart/form-data">
                    <h4>Đăng ký</h4>
                    <h5>Đăng ký tài khoản mới</h5>
                    <?php if(isset($thongbao)) : ?>
                        <div class="thongbao">
                            <?= $thongbao ?>
                        </div>
                    <?php endif ?>
                    <input type="text" name="name" placeholder="Họ tên" >
                        <span style="color: red;">
                            <?= isset($error['name']) ? $error['name'] : '' ?>
                        </span>
                    <input type="text" name="email" placeholder="Email" >
                        <span style="color: red;">
                            <?= isset($error['email']) ? $error['email'] : '' ?>
                        </span>
                    <h6 style="color: black;">Ảnh đại diện</h6>
                    <input type="file" name="img" >
                        <span style="color: red;">
                            <?= isset($error['img']) ? $error['img'] : '' ?>
                        </span>
                    <input type="password" name="pass" placeholder="Mật khẩu">
                        <span style="color: red;">
                            <?= isset($error['pass']) ? $error['pass'] : '' ?>
                        </span>
                    
                    <input type="text" name="repass" placeholder="Nhập lại mật khẩu" >
                        <span style="color: red;">
                            <?= isset($error['repass']) ? $error['repass'] : '' ?>
                        </span>
                    
                    <input type="submit" name="signup" value="Đăng ký" class="btn1">
                </form>
                <a href="index.php?act=login" class="dnthave">Đã có tài khoản? Đăng nhập ngay</a>
            </div>

        </div>
    </div>
</main>