<main>

    <section class="breadcrumb-area breadcrumb-bg" data-background="layout/img/bg/breadcrumb_bg03.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Danh sách đơn hàng</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách đơn hàng</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-wrapper">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="product-stt">STT</th>
                                        <th class="product-thumbnail">Mã Đơn hàng</th>
                                        <th class="product-name">Người mua</th>
                                        <th class="product-price">Phương thức thanh toán</th>
                                        <th class="product-quantity">Tổng giá trị đơn hàng</th>
                                        <th class="product-size">Ngày đặt hàng</th>
                                        <th class="product-size">Trạng thái</th>
                                        <th class="product-delete"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt = 1;
                                    $total = 0; ?>
                                    <?php foreach ($bill as $bill) : ?>
                                        <tr>
                                            <td class="product-stt"><?= $stt ?></td>
                                            <td class="product-thumbnail">DH-<?= $bill['id'] ?></a></td>
                                            <td class="product-name">
                                                <?= $bill['fullname'] ?>
                                            </td>
                                            <td class="product-price"><?= $bill['method'] ?></td>
                                            <td class="product-quantity">
                                                <?= currency_format($bill['total']) ?>
                                            </td>
                                            <td class="product-size"><?= $bill['date'] ?></span></td>
                                            <td>
                                                <?php if ($bill['status'] == "Đã giao") { ?>
                                                    <form action="index.php?act=mybill" method="POST">
                                                        <input name="id_bill" type="hidden" value="<?= $bill['id'] ?>">
                                                        <input name="status" type="hidden" value="Hoàn thành">
                                                        <button type="submit" name="doitt" style="padding: 5px 20px" class="btn-primary">Đã nhận hàng</button>
                                                    </form>
                                                <?php } elseif ($bill['status'] == "Hoàn thành") { ?>
                                                    <button style="padding: 5px 20px" class="btn-success"><?= $bill['status'] ?></button>
                                                <?php } elseif ($bill['status'] == "Đang xử lí") { ?>
                                                    <span style="color:brown"><?= $bill['status']?></span>
                                                    <form action="index.php?act=mybill" method="POST">
                                                        <input name="id_bill" type="hidden" value="<?= $bill['id'] ?>">
                                                        <input name="status" type="hidden" value="Đã hủy">
                                                        <button type="submit" name="doitt" style="padding: 5px 20px" class="btn-danger">Hủy đơn hàng</button>
                                                    </form>
                                                <?php } elseif ($bill['status'] == "Đang chuẩn bị hàng") { ?>
                                                    <span style="color:blue"><?= $bill['status']?></span>
                                                <?php } elseif ($bill['status'] == "Đang giao hàng") { ?>
                                                    <span style="color:green"><?= $bill['status']?></span>
                                                <?php } elseif ($bill['status'] == "Đã hủy") { ?>
                                                    <button style="padding: 5px 20px" class="btn-danger"><?= $bill['status'] ?></button>
                                                <?php } else { ?>
                                                    <?= $bill['status'] ?>
                                                <?php } ?>

                                            </td>
                                            <td class="product-delete"><a href="index.php?act=bill_details&id=<?= $bill['id'] ?>">Xem chi tiết</a></td>
                                        </tr>
                                        <?php $stt += 1; ?>
                                    <?php endforeach ?>


                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</main>