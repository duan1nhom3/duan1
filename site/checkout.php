<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .top-checkout{
        display:flex ;
        justify-content: space-around;
        
      }
      .qrcode{
        margin-top: 20px;
        display: flex;
        justify-content: space-around;
        margin-bottom: 30px;
      }
      .qrcheckout{
        display: none;
        background-color: whitesmoke;
        padding: 20px;
        width: 850px;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container pt-5">

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Đơn hàng</span>
        <span class="badge badge-secondary badge-pill"></span>
      </h4>
      <ul class="list-group mb-3"> <h5>Tên sản phẩm</h5>
      <?php
                            $stt = 0;
                            $tongtien = 0;
                            foreach($_SESSION['addcart'] as $cart){
                               
                                $stt+=1; 
                                $tongtien += $cart[7];
                          
                            
                        ?>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            
          <div>  
            <h6 class="my-0"><?= $stt?>.</h6>
            <img style="border-radius: 10px;" src="layout/img/product/<?php echo $cart[3]?>" alt="" width="50px">
            <small class="text-muted"><?php echo $cart[1]?></small>
            <span class="text-muted" style="margin-left: 150px;">Số lượng <?php echo $cart[6]?></span>
            <span class="text-muted" style="margin-left: 150px;"><?php echo $cart[7]?>.000 VND</span>
            
          </div>
          
        </li>
        <?php }?>
        
        <li class="list-group-item d-flex justify-content-between bg-light">

          <span class="text-success"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Tổng tiền (VND)</span>
          <strong><?php echo $tongtien?>.000 VND</strong>
        </li>
      </ul>

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3"></h4>
      <form action="indexdemo.php?act=addbill" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <?php if (isset($_SESSION['user'])) {
              extract($_SESSION['user']);
            } ?>
            <label for="firstName">Họ và Tên</label>
            <input type="text" class="form-control" name="hoten" placeholder="Họ tên" style="width: 835px;" value="<?= isset($fullname) ? $fullname : '' ?>" required>
            <div class="invalid-feedback">
              Điền thông tin.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email <span class="text-muted"></span></label>
          <input type="email" class="form-control" name="email" value="<?= isset($email) ? $email : '' ?>" placeholder="you@example.com">
          <div class="invalid-feedback">
            Điền đúng địa chỉ eamil.
          </div>
          <input type="hidden" name="tongtien" value="<?=$tongtien?>">
        </div>

        <div class="mb-3">
          <label for="address">Địa chỉ</label>
          <input type="text" class="form-control" name="diachi" value="<?= isset($address) ? $address : '' ?>" placeholder="Địa chỉ" required>
          <div class="invalid-feedback">
            Điền địa chỉ chính xác.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Số điện thoại<span class="text-muted"></span></label>
          <input type="text" class="form-control" name="sdt" value="<?= isset($phone_number) ? $phone_number : '' ?>" placeholder="xxxx">
        </div>


        <h4 class="mb-3">Phương thức thanh toán</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="pttt" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit" value="Thanh toán trực tiếp" onclick="offQR()">Thanh toán trực tiếp</label>
          </div>
          
          <div class="custom-control custom-radio">
            <input id="paypal" name="pttt" type="radio" class="custom-control-input" required value="Thanh toán Chuyển khoản ngân hàng">
            <label class="custom-control-label" for="paypal" onclick="showQR()">Thanh toán Online (QR CODE)</label>
          </div>
        </div>
        <div class="qrcheckout" id="qr">
        <div class = "top-checkout">
        <h4>Thanh toán QR CODE</h4> 
        
        </div>
        <div class="qrcode">
        <img src="layout/img/images/1669999370410.2678.png" width="30%" alt="">
        <div>
            <h4>Hướng dẫn quét mã</h4>
            <br>
            <p>1. Tải xuống hoặc chụp màn hình mã</p>
            <br>
            <p>2. Đăng nhập ứng dụng mobile banking</p>
            <br>
            <p>3. Trên ứng dụng chọn tính năng quét mã QR</p>
            <br>
            <p>4. Quét mã QR ở trang này và thanh toán</p>
        </div>
        </div>
        <div>
            <h4 style="text-align: center;">Tổng giá trị đơn hàng: <?=$tongtien?>.000 VND</h4>
            <h4 style="text-align: center;">Ghi rõ nội dung: </h4>
        </div>
        <script>
            function showQR(){
                document.getElementById("qr").style.display = "block";
            }
            function offQR(){
                document.getElementById("qr").style.display = "none";
            }
        </script>
    </div>
        <hr class="mb-4">
        
        <a href="indexdemo.php?act=addbill"><button class="btn btn-primary btn-lg btn-block" type="submit" name="addbill">Xác nhận thanh toán</button></a>
      </form>
      <a href="index.php?act=cart"><button class="btn btn-primary btn-lg btn-block mt-5" type="submit">Quay lại giỏ hàng</button></a>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
    
        
    
    </body>
</html>