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
        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                <div class="info">
                    <h4>Tổng khách hàng</h4>
                    <?php $countuser = countuser(); ?>
                    <p><b><?= $countuser["countuser"] ?> khách hàng</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x'></i>
                <div class="info">
                    <div class="info">
                        <h4>Tổng sản phẩm</h4>
                        <?php $countpd = countsp(); ?>
                        <p><b><?= $countpd["countpd"] ?> sản phẩm</b></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                <div class="info">
                    <h4>Tổng đơn hàng</h4>
                    <?php $countbill = countbill(); ?>
                    <p><b><?= $countbill["countbill"] ?> đơn hàng</b></p>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <!--Left-->
        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon"><i class='icon fa-3x bx bxs-chart'></i>
                <div class="info">
                    <h4>Tổng thu nhập</h4>
                    <?php $countbillht = countbillht();
                    $thunhap = currency_format($countbillht["tong"]); ?>
                    <p><b><?= $thunhap ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                <div class="info">
                    <h4>Tổng danh mục</h4>
                    <?php $countcate = countcate(); ?>
                    <p><b><?= $countcate["countcate"] ?> danh mục</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon"><i class='icon fa-3x bx bxs-chart'></i>
                <div class="info">
                    <h4>Tổng bình luận</h4>
                    <?php $countcomment = countcomment(); ?>
                    <p><b><?= $countcomment["countcomment"] ?> bình luận</b></p>
                </div>
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
                        <?php $stt = 1 ?>
                        <?php foreach ($thongke as $tk) : ?>
                            <tr>
                                <td class="text-center">
                                    <?= $stt ?>
                                </td>
                                <td class="text-center"><?= $tk['cate'] ?></td>
                                <td class="text-center">
                                    <?= $tk['countpd'] ?>
                                </td>
                                <td class="text-center">
                                    <?= currency_format($tk['maxprice']) ?>
                                </td>
                                <td class="text-center">
                                    <?= currency_format($tk['minprice']) ?>
                                </td>
                                <td class="text-center">
                                    <?= currency_format($tk['avgprice']) ?>
                                </td>

                            </tr>
                            <?php $stt += 1 ?>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
            <!-- / div trống-->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">SẢN PHẨM BÁN CHẠY</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Danh mục</th>
                                <th>Lượt mua</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($spbanchay as $pd) : ?>
                                <tr>
                                    <td><?= $pd['id'] ?></td>
                                    <td><?= $pd['product_name'] ?></td>
                                    <td><?= currency_format($pd['price']) ?></td>
                                    <td>
                                        <?php foreach ($categories as $cate) : ?>
                                            <?php if ($pd['id_cate'] === $cate['id']) : ?>
                                                <?= $cate['cate_name']  ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </td>
                                    <td><?= $pd['luotmua'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">Thống kê đơn hàng</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Đơn hàng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listbill as $bill) : ?>
                                <tr>
                                    <td><?= $bill['id'] ?></td>
                                    <td><?= $bill['fullname'] ?></td>
                                    <td>
                                        <?php $billpd = loadonecart($bill['id']) ?>
                                        <?php foreach ($billpd as $pdname) : ?>
                                            <?= $pdname['product_name'] ?>,
                                        <?php endforeach ?>
                                    </td>
                                    <td><?= currency_format($bill['total']) ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">Thông kê doanh thu</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tổng đơn hàng</th>
                                <th>Đơn hàng đang thực hiện</th>
                                <th>Đơn hàng đã hủy</th>
                                <th>Đơn hàng đã hoàn thành</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Số đơn</td>
                                <td><?= $countbill["countbill"] ?> đơn hàng</td>
                                <td>
                                    <?php $countbillcht = countbillcht(); ?>
                                    <?= $countbillcht["countbill"] ?> đơn hàng
                                </td>
                                <td>
                                    <?php $countbilldh = countbilldh(); ?>
                                    <?= $countbilldh["countbill"] ?> đơn hàng
                                </td>
                                <td>
                                    <?php $countbillht = countbillht(); ?>
                                    <?= $countbillht["countbill"] ?> đơn hàng
                                </td>
                            </tr>
                            <tr>
                                <td>Tổng tiền</td>
                                <td><?= currency_format($countbill["tong"]) ?></td>
                                <td>
                                    <?php $countbillcht = countbillcht(); ?>
                                    <?= currency_format($countbillcht["tong"]) ?>
                                </td>
                                <td>
                                    <?php $countbilldh = countbilldh(); ?>
                                    <?= currency_format($countbilldh["tong"]) ?>
                                </td>
                                <td>
                                    <?php $countbillht = countbillht(); ?>
                                    <?= currency_format($countbillht["tong"]) ?>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="4">Doanh thu:</th>
                                <td><?= currency_format($countbillht["tong"]) ?></td>
                            </tr>
                        </tbody>
                    </table>
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