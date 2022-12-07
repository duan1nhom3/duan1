<?php
extract($bill);
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
        </div>
    </div>
    <div class="tieude text-center p-5">
        <h2>Thông tin chi tiết đơn hàng</h2>
    </div>
    <div class="ttdonhang ">

        <div class="row p-5" style="width:70%; margin:0 auto">
            <div class="col">
                <h3 class="pt-5 pb-5">Thông tin người mua</h3>
                <p style="font-size: 17px;">Người mua: <?= $fullname ?></p>
                <p style="font-size: 17px;">Địa chỉ: <?= $address ?></p>
                <p style="font-size: 17px;">Số điện thoại: <?= $phone_number ?></p>
                <p style="font-size: 17px;">Email: <?= $email ?></p>

            </div>
            <div class="col">
                <h3 class="pt-5 pb-5">Thông tin đơn hàng</h3>
                <p style="font-size: 17px;">Mã đơn hàng: DH-<?= $bill['id'] ?></p>
                <p style="font-size: 17px;">Ngày đặt hàng: <?= $date ?></p>
                <p style="font-size: 17px;">Phương thức thanh toán: <?= $method ?></p>
                <p style="font-size: 17px;">Tổng tiền đã thanh toán: <?=currency_format($total)?></p>
                <p style="font-size: 17px;">Trạng thái đơn hàng: <?= $status ?></p>
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
                foreach ($bill_details as $bd) {
                    echo '<tr>
                            <td>' . $stt . '</td>
                            <td>' . $bd['product_name'] . '</td>
                            <td><img src="../layout/img/product/' . $bd['img'] . '" alt="" width="50px"></td>
                            <td>' . $bd['price'] . '.000 VNĐ</td>
                            <td>' . selectcolor($bd['color'])['color_name'] . '</td>
                            <td>' . selectsize($bd['size'])['size'] . '</td>
                            <td>' . $bd['amount'] . '</td>

                            

                        </tr>';
                    $stt += 1;
                    // $tongtien += $cart[7];
                }
                echo '<tr>
                        <td>Tổng tiền:</td>
                        <td>' . $total . '.000 VNĐ</td>                
                    </tr>';
                ?>

            </table>
        </div>
        <div>
            <h2 class="text-center">Cập nhật trạng thái đơn hàng</h2>
            <form action="index.php?act=updatebill" method="post">
                <div class="form-group col-md-6" style="margin:40px auto">
                    <input style="margin: 0 10px 0 7px" type="radio" name="ttdh" value="Đang xử lí" <?= ($status == 'Đang xử lí') ? 'checked' : '' ?>>Đang xử lí
                    
                    <input style="margin: 0 10px 0 7px" type="radio" name="ttdh" value="Đang chuẩn bị hàng" <?= ($status == 'Đang chuẩn bị hàng') ? 'checked' : '' ?>>Đang chuẩn bị hàng
                    
                    <input style="margin: 0 10px 0 7px" type="radio" name="ttdh" value="Đang giao hàng" <?= ($status == 'Đang giao hàng') ? 'checked' : '' ?>>Đang giao hàng
                    
                    <input style="margin: 0 10px 0 7px" type="radio" name="ttdh" value="Đã giao" <?= ($status == 'Đã giao') ? 'checked' : '' ?>>Đã giao
                </div>
                
            <input type="hidden" name="id" value="<?=$id?>">
        </div>
        <div style="margin:30px 0 50px 190px">
            <a href="index.php?act=updatebill"><button class="btn" type="submit" name="capnhat">Cập nhật</button></a>
            <a href="index.php?act=bill"><button class="btn">Danh sách đơn hàng</button></a>
        </div>
        </form>
    </div>

    <div class="text-center" style="font-size: 13px">
        <p><b>Copyright
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script> Phần mềm quản lý bán hàng | Dev By Group 3
            </b></p>
    </div>
</main>