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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
            <p>Phương thức thanh toán: <?=$method?></p>
            <p>Tổng tiền đã thanh toán: $<?=$total?></p>
        </div>
    </div>
    <div class="ctdh">
        <h3 class="text-center">Chi tiết đơn hàng:</h3>
        <div class="giohang">
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
                    foreach($bill_details as $bd){
                        echo '<tr>
                            <td>'.$stt.'</td>
                            <td>'.$bd['product_name'].'</td>
                            <td><img src="layout/img/product/'.$bd['img'].'" alt="" width="50px"></td>
                            <td>'.$bd['price'].'.00</td>
                            <td>'.selectcolor($bd['color'])['color_name'].'</td>
                            <td>'.selectsize($bd['size'])['size'].'</td>

                            

                        </tr>';  
                        $stt+=1; 
                        $tongtien += $cart[2];
                    } 
                    echo '<tr>
                        <td>Tổng tiền:</td>
                        <td>'.$tongtien.'</td>                
                    </tr>';
                ?>
        
            </table>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>