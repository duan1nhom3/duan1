
    <?php 
        extract($bill);
    ?>
    <div class="tieude text-center p-5">
        <h2>Thông tin chi tiết đơn hàng</h2>
    </div>
    <div class="ttdonhang ">
        
        <div class="row p-5" style="width:70%; margin:0 auto">
            <div class="col">
                <h3 class="pt-5 pb-5">Thông tin người mua</h3>
                <p style="font-size: 17px;">Người mua: <?=$fullname?></p>
                <p style="font-size: 17px;">Địa chỉ: <?=$address?></p>
                <p style="font-size: 17px;">Số điện thoại: <?=$phone_number?></p>
                <p style="font-size: 17px;">Email: <?=$email?></p>
            
            </div>
            <div class="col" >
                <h3 class="pt-5 pb-5">Thông tin đơn hàng</h3>
                <p style="font-size: 17px;">Mã đơn hàng: DH-<?=$bill['id'] ?></p>
                <p style="font-size: 17px;">Ngày đặt hàng: <?=$date?></p>
                <p style="font-size: 17px;">Phương thức thanh toán: <?=$method?></p>
                <p style="font-size: 17px;">Tổng tiền đã thanh toán: <?=currency_format($total)?></p>
                <p style="font-size: 17px;">Trạng thái đơn hàng: <?=$status?></p>
            </div>
            
        </div>
    </div>
    <div class="ctdh">
        <h3 class="text-center">Chi tiết đơn hàng:</h3>
        <div class="giohang" style="width: 70%;margin: 50px auto;">
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
                            <td>'.currency_format($bd['price']).'</td>
                            <td>'.selectcolor($bd['color'])['color_name'].'</td>
                            <td>'.selectsize($bd['size'])['size'].'</td>
                            <td>'.$bd['amount'].'</td>

                            

                        </tr>';  
                        $stt+=1; 
                        // $tongtien += $cart[7];
                    } 
                    echo '<tr>
                        <td>Tổng tiền:</td>
                        <td>'.currency_format($total).'</td>                
                    </tr>';
                ?>
        
            </table>
        </div>
        <div style="margin: 30px 0 50px 220px">
            <a href="index.php?act=mybill"><button class="btn">Danh sách đơn hàng</button></a>
        </div>
    </div>

