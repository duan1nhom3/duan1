<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .giohang{
        width: 70%;
        margin: 50px auto;
    }
    .tt{
        margin-left: 400px;
    }
</style>
    
    
</head>
<body>
    <?php 
        extract($bill);
    ?>
    <div class="tieude text-center p-5">
        <h2>Cảm ơn <?=$fullname?> đã mua hàng</h2>
    </div>
    <div class="ttdonhang ">
        <h3 class="text-center">Thông tin đơn hàng</h3>
        <div class="tt">
            <p>Mã đơn hàng: DH-<?=$bill['id'] ?></p>
            <p>Người mua: <?=$fullname?></p>
            <p>Địa chỉ: <?=$address?></p>
            <p>Số điện thoại: <?=$phone_number?></p>
            <p>Email: <?=$email?></p>
            <p>Ngày đặt hàng: <?=$date?></p>
            <p>Phương thức thanh toán: <?=$method?></p>
            <p>Tổng tiền đã thanh toán: <?=$total?>.000 VND</p>
            
        </div>
    </div>
    <div class="ctdh">
        <h3 class="text-center">Chi tiết đơn hàng:</h3>
        <div class="giohang">
            <table class="table table-striped">
                <thead>
                    <td>STT</td>
                    <td>Tên sản phẩm</td>
                    <td>Ảnh</td>
                    <td>Đơn giá</td>
                    <td>Màu sắc</td>
                    <td>Size</td>
                    <td>Số lượng</td>

                </thead>
                <?php
                    $stt = 1;
                    $tongtien = 0;
                    foreach($bill_details as $bd){
                        echo '<tr>
                            <td>'.$stt.'</td>
                            <td>'.$bd['product_name'].'</td>
                            <td><img src="layout/img/product/'.$bd['img'].'" alt="" width="50px"></td>
                            <td>'.$bd['price'].'.000 VNĐ</td>
                            <td>'.selectcolor($bd['color'])['color_name'].'</td>
                            <td>'.selectsize($bd['size'])['size'].'</td>
                            <td>'.$bd['amount'].'</td>

                            

                        </tr>';  
                        $stt+=1; 
                        // $tongtien += $cart[7];
                    } 
                    echo '<tr>
                        <td>Tổng tiền:</td>
                        <td>'.$total.'.000 VNĐ</td>                
                    </tr>';
                ?>
        
            </table>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>