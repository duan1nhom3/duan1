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
    <div class="row">
        <!--Left-->
        <div class="col-md-12 col-lg-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
                <div class="info">
                    <h4>Tổng sản phẩm</h4>
                    <?php $countpd = countsp(); ?>
                    <p><b><?= $countpd["countpd"] ?> sản phẩm</b></p>
                    <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
            <div class="info">
                        <h4>Tổng doanh thu cửa hàng</h4>
                        <?php $countbill = countbill();?>
                        <p><b><?=$countbill["tong"]?>.000 VNĐ</b></p>
                        <p class="info-tong">Tổng số đơn hàng được quản lý.</p>
                    </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Thống kê sản phẩm theo danh mục</h3>
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:100px" class="text-center">STT</th>
                                <th class="text-center">Danh mục</th>
                                <th class="text-center">Số sản phẩm</th>
                                <th class="text-center">Gía cao nhất</th>
                                <th class="text-center">Gía thấp nhất</th>
                                <th class="text-center">Giá trung bình</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt=1?>
                            <?php foreach ($thongke as $tk) : ?>
                                <tr>
                                <td class="text-center">
                                        <?=$stt?>
                                    </td>
                                    <td class="text-center"><?= $tk['cate'] ?></td>
                                    <td class="text-center">
                                        <?=$tk['countpd']?>
                                    </td>
                                    <td class="text-center">
                                        <?=$tk['maxprice']?>.000 VNĐ
                                    </td>
                                    <td class="text-center">
                                        <?=$tk['minprice']?>.000 VNĐ
                                    </td>
                                    <td class="text-center">
                                        <?=$tk['avgprice']?> VNĐ
                                    </td>
                                    
                                </tr>
                                <?php $stt+=1?>
                            <?php endforeach ?>

                            <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
                                <?= isset($thongbao) ? $thongbao : '' ?>
                            </div>
                        </tbody>
                    </table>
                </div>
                <!-- / div trống-->
            </div>
        </div>

    </div>
    </div>

    </div>


    <div class="text-center" style="font-size: 13px">
        <p><b>Copyright
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script> ADMIN lý bán hàng | Dev By Group 3
            </b></p>
    </div>
</main>