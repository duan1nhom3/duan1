<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .thongtinkh{
            width: 70%;
            margin: 50px auto;
        }
        .pttt{
            margin-left: 400px;
        }
        .ttdh{
            width: 70%;
            margin: 20px auto;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="tieude text-center">
        <h2 class="pt-5">Thanh toán</h2>
    </div>
    <form action="indexdemo.php?act=addbill" method="post">
        <div class="thongtinkh">
            <h3 class="text-center">Thông tin đặt hàng</h3>
            <div class="tt">
                Họ tên: <input class="form-control" type="text" name="hoten">
            </div>
            <div class="tt">
                Địa chỉ: <input class="form-control" type="text" name="diachi">
            </div>
            <div class="tt">
                Số điện thoại: <input class="form-control" type="text" name="sdt">
            </div>
            <div class="tt">
                Email: <input class="form-control" type="text" name="email">
            </div>
        </div>
        <div>
                <div class="text-center pt-5">
                    <h3 class="fw-bold mb-5">Phương thức thanh toán</h3>
                </div>
                <div class="pttt input-group flex-nowrap mb-5 text-center" >
                    <div class="">
                        <input class="form-check-input me-3"  type="radio" name="pttt" value="Thanh toán trực tiếp"  checked>Trả tiền khi nhận hàng 
                    </div>
                    <div class="">
                        <input class="form-check-input me-3 ms-3" type="radio" name="pttt" value="Chuyển khoản ngân hàng"  >Chuyển khoản ngân hàng
                    </div>
                    <div class="">
                        <input class="form-check-input me-3 ms-3" type="radio" name="pttt" value="Thanh toán online" >Thanh toán online
                    </div>
                </div>
        </div>
        <div>
                <div class="text-center pt-5">
                    <h3 class="fw-bold mb-5">Thông tin đơn hàng</h3>
                </div>
                <div class="ttdh">
                    <table class="table table-striped">
                        <thead>
                            <td>STT</td>
                            <td>Product Name</td>
                            <td>IMG</td>
                            <td>Price</td>
                            <td>Color</td>
                            <td>Size</td>
                        </thead>
                        <?php
                            $stt = 1;
                            $tongtien = 0;
                            foreach($_SESSION['mycart'] as $cart){
                                echo '<tr>
                                    <td>'.$stt.'</td>
                                    <td>'.$cart[1].'</td>
                                    <td><img src="layout/img/product/'.$cart[3].'" alt="" width="50px"></td>
                                    <td>'.$cart[2].'.00</td>
                                    <td>'.$cart[5].'</td>
                                    <td>'.$cart[4].'</td>
                                </tr>';  
                                $stt+=1; 
                                $tongtien += $cart[2];
                            } 
                            echo '<tr>
                                <td>Tổng tiền:</td>
                                <td>$'.$tongtien.'.00</td>                
                            </tr>';
                        ?>
                
                    </table>
                    <input type="hidden" name="tongtien" value="<?=$tongtien?>">
                    <a class="btn btn-success" href="indexdemo.php?act=viewcart">Quay lại giỏ hàng</a>
                    <a href="indexdemo.php?act=addbill"><input class="btn btn-success" type="submit" name="addbill" value="Xác nhận"></a>
                </div>
        </div>
    </form>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>