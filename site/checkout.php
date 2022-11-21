
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
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill"></span>
      </h4>
      <ul class="list-group mb-3">
      <?php
                            $stt = 1;
                            $tongtien = 0;
                            foreach($_SESSION['mycart'] as $cart){
                               
                                $stt+=1; 
                                $tongtien += $cart[2];
                          
                            
                        ?>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>  
            <h6 class="my-0">Product name</h6>
            <small class="text-muted"><?php echo $cart[1]?></small>
            
          </div>
          <span class="text-muted"><?php echo $cart[2]?></span>
        </li>
        <?php }?>
        
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small></small>
          </div>
          <span class="text-success"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong><?php echo $tongtien?></strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3"></h4>
      <form action="indexdemo.php?act=addbill" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Họ và Tên</label>
            <input type="text" class="form-control" name="hoten" placeholder="Nguyen Van A" value="" required>
            <div class="invalid-feedback">
              Điền thông tin.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email <span class="text-muted"></span></label>
          <input type="email" class="form-control" name="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Điền đúng địa chỉ eamil.
          </div>
          <input type="hidden" name="tongtien" value="<?=$tongtien?>">
        </div>

        <div class="mb-3">
          <label for="address">Địa chỉ</label>
          <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" required>
          <div class="invalid-feedback">
            Điền địa chỉ chính xác.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Số điện thoại<span class="text-muted"></span></label>
          <input type="text" class="form-control" name="sdt" placeholder="xxxx">
        </div>


        <h4 class="mb-3">Phương thức thanh toán</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="pttt" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit" value="Thanh toán trực tiếp">Trực tiếp</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="pttt" type="radio" class="custom-control-input" required value="Ví điện tử">
            <label class="custom-control-label" for="debit"  >Ví điện tử</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="pttt" type="radio" class="custom-control-input" required value="Thanh toán Chuyển khoản ngân hàng">
            <label class="custom-control-label" for="paypal">Banking ATM</label>
          </div>
        </div>
        <hr class="mb-4">
        
        <a href="indexdemo.php?act=addbill"><button class="btn btn-primary btn-lg btn-block" type="submit" name="addbill">Xác nhận thanh toán</button></a>
      </form>
      <a href="indexdemo.php?act=viewcart"><button class="btn btn-primary btn-lg btn-block mt-5" type="submit">Quay lại giỏ hàng</button></a>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script></body>
</html>
